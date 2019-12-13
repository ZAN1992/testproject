<?php

/**
 * Interface UserInterface.
 */
interface UserInterface {
  public function getUser();
  public function getLogin();
  public function setLogin(string $login);
  public function getName();
  public function setName(string $name);
  public function getEmail();
  public function setEmail(string $email);
  public function setPassword(string $password);
  public function toArray();
}
