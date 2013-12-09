<?php

// Update the include paths, just makes things easier.
set_include_path(implode(PATH_SEPARATOR, array(
  realpath(dirname(__FILE__).'/../'),
  get_include_path(),
)));

// Use the Composer Autoloader.
require_once 'vendor/autoload.php';

// Register the App's autoloader.
spl_autoload_register(function ($className) {
  if (preg_match("/^(\\\|)App\\\(.*)\\\(.*)/i", $className, $matches)) {
    $path = str_replace('\\\\', '/', strtolower($matches[2]));
    $file = lcfirst($matches[3]);
    $filename = sprintf('app/%s/%s.php', $path, $file);
  } else {
    return false;
  }

  include $filename;
});
