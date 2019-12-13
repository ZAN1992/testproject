<?php

require_once 'Connection.php';

/**
 * Class XMLConnect.
 */
final class XMLConnect extends Connection {
  const TYPE = 'XML';

  /**
   * {@inheritdoc}
   */
  public function getType() {
    return self::TYPE;
  }

  /**
   *  Open connect to XML file or document.
   *
   * @param string $path
   *   Path to XML file. For example: core/storage/manao_data.xml
   *
   * @return \SimpleXMLElement
   *   SimpleXMLElement.
   */
  protected function open(string $path) {
    return new SimpleXMLElement($path, 0, TRUE);
  }
}
