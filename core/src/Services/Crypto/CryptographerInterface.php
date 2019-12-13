<?php

require_once 'ComparisonInterface.php';

/**
 * Interface CryptographerInterface.
 */
interface CryptographerInterface extends ComparisonInterface {

  /**
   * Encode password.
   *
   * @param string $password
   *
   * @return string
   *   Hash.
   */
  public function encode(string $password);
}
