<?php

/**
 * Class Connection.
 */
abstract class Connection {
  private $data;
  protected static $instances = [];

  protected function __construct(string $path) {
    $this->data = static::open($path);
  }

  protected function __clone() { }

  public function __wakeup()  {
    throw new \Exception('Cannot unserialize.');
  }

  public static function getInstance(string $path = ''): Connection  {
    $obj = static::class;
    if (!isset(static::$instances[$obj])) {
      if (empty($path)) {
        throw new \Exception('Path to file is empty');
      }
      static::$instances[$obj] = new static($path);
    }

    return static::$instances[$obj];
  }

  public function getData() {
    return $this->data;
  }

  abstract protected function open(string $path);

  abstract public function getType();
}
