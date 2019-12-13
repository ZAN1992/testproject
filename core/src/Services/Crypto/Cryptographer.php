<?php

require_once 'CryptographerInterface.php';
require_once '../../sites/Settings.php';

/**
 * Class Cryptographer.
 */
class Cryptographer implements CryptographerInterface {

  /**
   * {@inheritdoc}
   */
  public function encode(string $password) {
    return md5($password . Settings::getHashSalt());
  }

  /**
   * {@inheritdoc}
   */
  public function compare(string $password, string $hash) {
    return ($hash === md5($password . Settings::getHashSalt())) ? TRUE : FALSE;
  }
}