<?php

class Request {
  private $request;

  public function set($request) {
    $this->request = $request;
    return $this;
  }

  public function get() {
    return $this->request;
  }
}