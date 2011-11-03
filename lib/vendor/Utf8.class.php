<?php

require sfConfig::get('sf_lib_dir').'/vendor/utf8/utf8.php';

class Utf8
{
  public static function is_ascii($str)
  {
    $unicode = self::utf8_to_unicode($str);
    while(list(,$char) = each($unicode)) {
      if ($char > 2046) return false;
    }

    return true;
  }

  public static function is_english($str)
  {
    $unicode = self::utf8_to_unicode($str);
    while(list(,$char) = each($unicode)) {
      if ($char > 128) return false;
    }

    return true;
  }

  public static function utf8_to_unicode($str)
  {
    $unicode = array();
    $values = array();
    $lookingFor = 1;

    for ($i = 0; $i < strlen($str); $i++)
    {
      $thisValue = ord($str[$i]);

      if ($thisValue < 128 ) {
        $unicode[] = $thisValue;
      }
      else
      {
        if (count($values) == 0) {
          $lookingFor = ($thisValue < 224) ? 2 : 3;
        }
        $values[] = $thisValue;

        if (count($values) == $lookingFor)
        {
          $number = ($lookingFor == 3) ? (($values[0] % 16) * 4096) + (($values[1] % 64) * 64) + ($values[2] % 64) : (($values[0] % 32) * 64) + ($values[1] % 64);

          $unicode[] = $number;
          $values = array();
          $lookingFor = 1;
        }
      }
    } // end for

    return $unicode;
  } // end func

  public static function loadFunction($function)
  {
    $file = sfConfig::get('sf_lib_dir').'/vendor/utf8/'. escapeshellarg($function) .'.php';
    if (!is_readable($file))
    {
      return false;
    }

    include_once($file);
    return true;
  }
}
