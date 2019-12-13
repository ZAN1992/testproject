<?php

/**
 * Class Settings.
 */
final class Settings {

  /**
   * Get hash-salt.
   *
   * @return string
   */
  public static function getHashSalt() {
    return '4d747909a32d2a5c7c25b8a6b766ae5e';
  }

  /**
   * Get path to database file.
   *
   * @return string
   */
  public static function getDatabasePath() {
    return $_SERVER['DOCUMENT_ROOT'] . '/core/storage/manao_data.xml';
  }
}