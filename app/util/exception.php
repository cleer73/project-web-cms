<?php

namespace App\Util;

class Exception extends \Exception {
  public function __construct($message, $code, Exception $previous = null) {
    parent::__construct($message, $code, $previous);
  }

  public function __toString() {
    return  "{__CLASS__}: [{$this->code}]: {$this->message}";
  }
}