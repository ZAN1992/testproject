<?php

/**
 * Class CreateUser.
 */
class CreateUser {

  private $cryptographer;
  private $userEntity;
  private $repository;

  public function __construct() {
    $this->cryptographer = new Cryptographer();
    $this->userEntity = new User($this->cryptographer);
    $this->repository = new Repository();
    $this->validator = new Validator();
  }

  public function create(Request $request) {
    $fields = $request->getParams();

    $this->userEntity->setName($fields['name']);
    $this->userEntity->setLogin($fields['login']);
    $this->userEntity->setEmail($fields['email']);
    $this->userEntity->setPassword($fields['password']);
  }

  protected function checkUserParams(array $fields) {
    if (empty($fields)) {
      throw new Exception('Data is empty!');
    }

    foreach ($fields['users'] as $field) {
      $this->validator->check($field);
    }
  }
}