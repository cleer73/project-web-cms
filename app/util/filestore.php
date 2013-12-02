<?php

namespace App\Util;

class FileStore {
  public $rootPath;

  public function __construct($config=[]) {
    if (empty($config['root_path'])) {
      throw new App\Util\Exception("ERROR! App\Util\FileStore - [root_path] is a required config.");
    }

    $this->rootPath = realpath(dirname($config['root_path']));
  }
}