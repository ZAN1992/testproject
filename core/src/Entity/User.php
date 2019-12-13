<?php

require_once 'UserInterface.php';

/**
 * Class User.
 */
class User implements UserInterface {
  private $login;
  private $password;
  private $email;
  private $name;
  private $cryptographer;

  /**
   * User constructor.
   *
   * @param \CryptographerInterface $cryptographer
   *   Crypthofrapher.
   */
  public function __construct(CryptographerInterface $cryptographer) {
    $this->cryptographer = $cryptographer;
  }

  public function __get($a) {

  }

  public function __set($a, $b) {

  }

  public function __isset($name) {
    // TODO: Implement __isset() method.
  }

  /**
   * {@inheritdoc}
   */
  public function getUser() {
    return new static();
  }

  /**
   * {@inheritdoc}
   */
  public function getLogin() {
    return $this->login;
  }

  /**
   * {@inheritdoc}
   */
  public function setLogin(string $login) {
    $this->login = $login;
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return $this->name;
  }

  /**
   * {@inheritdoc}
   */
  public function setName(string $name) {
    $this->name = $name;
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getEmail() {
    return $this->email;
  }

  /**
   * {@inheritdoc}
   */
  public function setEmail(string $email) {
    $this->email = $email;
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function setPassword(string $password) {
    $this->password = $this->cryptographer->encode($password);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getHashPassword() {
    return $this->password;
  }

  /**
   * Entity to array.
   *
   * @return array
   *   Entity to Array.
   */
  public function toArray() {
    return [
      'login' => $this->login,
      'password' => $this->password,
      'email' => $this->email,
      'name' => $this->name,
    ];
  }
}
