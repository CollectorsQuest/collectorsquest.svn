<?php

$parts = explode('.collectorsquest.', $_SERVER['SERVER_NAME']);
if (count($parts) != 2)
{
  $parts = explode('.cqstaging.', $_SERVER['SERVER_NAME']);
}

list($app, $env) = $parts;
if ('new' == $env || 'com' == $env)
{
  $env = 'prod';
}

@list(, $type, $size, $filename) = explode('/', $_SERVER['REQUEST_URI']);
if (in_array($type, array('image', 'video')))
{
  include_once('/www/libs/symfony-1.3.x/lib/yaml/sfYaml.php');

  $databases = sfYaml::load(dirname(__FILE__).'/../config/databases.yml');
  $databases['prod'] = $databases['all'];

  $dbh = new PDO(
    $databases[$env]['propel']['param']['dsn'],
    $databases[$env]['propel']['param']['username'],
    $databases[$env]['propel']['param']['password']
  );

  preg_match('/-(\d+)\.(jpg|flv)/i', $filename, $m);
  if (isset($m[1]) && ctype_digit($m[1]))
  {
    $stmt = $dbh->prepare("SELECT * FROM `multimedia` WHERE `id` = ? AND `type` = ? LIMIT 1");

    if ($stmt->execute(array($m[1], $type)))
    {
      $row = $stmt->fetch(PDO::FETCH_NAMED);
      
      $path  = '/uploads/'. $row['model'] .'/'. date_format(new DateTime($row['created_at']), 'Y/m/d');

      $extension = array_shift(explode('?', end(explode('.', $filename))));
      $path = implode('.', array($path .'/'. $row['md5'], $size, $extension));

      switch ($type)
      {
        case 'video':
          $content_type = 'video/x-flv';
          break;
        case 'image':
        default:
          $content_type = 'image/jpeg';
          break;
      }

      if (is_readable(dirname(__FILE__) . $path))
      {
        // Send Content-Type and the X-SendFile header
        header("Content-Type: ". $content_type);
        header("X-SendFile: /www/vhosts/collectorsquest.com/shared/" . $path);

        exit;
      }
      else
      {
        $path  = '/images/frontend/multimedia/'. $row['model'] .'/'. $size .'.png';

        // Send Content-Type and the X-SendFile header
        header("Content-Type: image/png");
        header("X-SendFile: " . dirname(__FILE__) . $path);

        exit;
      }
    }
  }
}

header("HTTP/1.0 404 Not Found");
