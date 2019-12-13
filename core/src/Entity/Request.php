<?php

class Request {
  private $request;
  private $params;

  private function __construct(array $params) {
    $this->params = $params;
    $this->parse();
  }

  public function getData() {
    return $this->request['data'];
  }

  public static function create(array $params) {
    return new self($params);
  }

  protected function parse() {
    if (empty($this->params['type'])) {
      // Session.
    }
    else {
      if($this->params['type'] === 'login') {
        $this->request['data']['login'] = $this->params['login'];
        $this->request['data']['password'] = $this->params['password'];
        $this->request['data']['email'] = $this->params['email'];
        $this->request['data']['name'] = $this->params['name'];
        $this->request['type'] = $this->params['type'];
      }
    }
  }
}
