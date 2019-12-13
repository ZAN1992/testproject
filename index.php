<?php

//close connection.
if (empty($_POST)) exit;

require_once 'core/Kernel.php';
require_once 'core/src/Entity/Request.php';

error_reporting(E_STRICT | E_ERROR | E_PARSE | E_CORE_ERROR | E_COMPILE_ERROR | E_USER_ERROR | E_RECOVERABLE_ERROR | E_DEPRECATED | E_USER_DEPRECATED);

ini_set('display_errors', 1);

$autoload = require 'autoload.php';

$request = Request::create($_POST);
$kernel = new Kernel($request);

header($_SERVER["SERVER_PROTOCOL"] . ' 200 OK');
header('Cache-Control: public');
header('Access-Control-Allow-Origin: *');
$json = json_encode([]);
die($json);