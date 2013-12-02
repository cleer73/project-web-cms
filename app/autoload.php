<?php

// Update the include paths, just makes things easier.
set_include_path(implode(PATH_SEPARATOR, array(
  realpath(dirname(__FILE__).'/../'),
  get_include_path(),
)));

// Register Slim's autoloader.
include 'vendor/slim/slim/Slim/Slim.php';
\Slim\Slim::registerAutoloader();

// Register the App's autoloader.
spl_autoload_register(function ($className) {
  if (preg_match("/^(\\\|)App\\\(.*)\\\(.*)/i", $className, $matches)) {
    $path = str_replace('\\\\', '/', strtolower($matches[2]));
    $file = lcfirst($matches[3]);
    $filename = sprintf('app/%s/%s.php', $path, $file);
  } else if (preg_match("/^(\\\|)dflydev\\\markdown\\\(.*)/i", $className, $matches))
    $file = str_replace('\\\\', '/', strtolower($matches[2]));
    $filename = sprintf('vendor/dflydev/markdown/src/dflydev/markdown/%s.php', $file);
  } else {
    return false;
  }

  include $filename;
});
