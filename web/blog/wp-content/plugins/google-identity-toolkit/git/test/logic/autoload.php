<?php
function __autoload($className) {
  $basePath = realpath(dirname(__FILE__) . '/../../');
  $paths = array('logic', 'util', 'session', 'data');
  $fileName = $className . '.php';
  foreach ($paths as $path) {
    if (file_exists("$basePath/{$path}/$fileName")) {
      require_once("$basePath/{$path}/$fileName");
      break;
    }
  }
}
