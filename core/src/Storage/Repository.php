<?php

require_once 'XMLConnect.php';
require_once '../Entity/UserInterface.php';

/**
 * Class Repository.
 */
class Repository {
  const FILE_PATH = '../../storage/manao_data.xml';

  /**
   * {@inheritdoc}
   */
  public function __construct() {
    XMLConnect::getInstance(static::FILE_PATH);
  }

  /**
   * Get all users.
   *
   * @throws \Exception
   *
   * @return \SimpleXMLElement
   *   Users.
   */
  public function getUsers() {
    $connect = XMLConnect::getInstance();
    return $connect->getData();
  }

  /**
   * Add user to database.
   *
   * @param UserInterface $user
   *   User.
   *
   * @throws \Exception
   *
   * @return bool
   */
  public function addUser(UserInterface $user) {
    /** @var SimpleXMLElement $users */
    $users = $this->getUsers();
    $newUser = $users->addChild('user');
    foreach ($user->toArray() as $key => $field) {
      $newUser->addChild($key, $field);
    }

    return $users->saveXML(static::FILE_PATH);
  }

  /**
   * User verification for uniqueness.
   *
   * @param \UserInterface $currentUser
   *   Current user.
   *
   * @throws \Exception
   *
   * @return bool
   */
  public function uniqueUser(UserInterface $currentUser) {
    $currentUserEmail = $currentUser->getEmail();
    $currentUserLogin = $currentUser->getLogin();
    /** @var SimpleXMLElement $users */
    $users = $this->getUsers();

    foreach ($users as $user) {
      if ((string) $user->login === $currentUserLogin || (string) $user->email === $currentUserEmail) {
        return FALSE;
      }
    }

    return TRUE;
  }
}