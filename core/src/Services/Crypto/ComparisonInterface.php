<?php

/**
 * Interface ComparisonInterface.
 */
interface ComparisonInterface {
  /**
   * Compare.
   *
   * @param string $password
   *   Password.
   * @param string $hash
   *   Hash.
   *
   * @return bool
   */
  public function compare(string $password, string $hash);
}