<?php

$config = require('config.php');

# Database connection
$dns = 'mysql:host='. $config['host'] .';dbname='. $config['db_name'];
$user = $config['user'];
$password = $config['password'];

try {
	$db = new PDO($dns, $user, $password);
} catch (Exception $e) {
	throw $e;
}

return $db;