<?php

class Validator {

  public function check(string $param, string $type = 'text') {
    if ($type === 'text') {
      if (preg_match("/^(\w+|\d+)$/i", $param)) {
        return $param;
      }
      else {
        return $this->clear($param);
      }
    }
  }

  protected function clear($param) {
    return $param;
  }
}