<?php

$db = require('../../connection.php');

$query = $db->prepare('SELECT * FROM users WHERE username = ? and pass = ?');
$executed = $query->execute(array($_POST['username'], $_POST['pass']));

if($executed) {
	$user = $query->fetch(PDO::FETCH_ASSOC);
	
	session_start();
	$_SESSION['user_id'] = $user['id'];
	$_SESSION['username'] = $user['username'];
	
	header('location: /index.php/dashboard/home');

} else {
	var_dump('Aucune entree trouvee');
}


