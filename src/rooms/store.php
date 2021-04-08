<?php

session_start();
$db = require('connection.php');

var_dump($_POST);
exit;

# Insert category
$query = $db->prepare('INSERT INTO rooms(category_id, `number`) VALUES (?, ?)');
$executed = $query->execute(array(
	$_POST['category_id'],
	$_POST['number'],
));

if($executed) {
	$_SESSION['alert-message'] = array(
		'title' => 'success',
		'message' => 'L\'ajout de la catégorie a été effectué'
	);
	header('location: /index.php/rooms/list');
} else {
	$_SESSION['alert-message'] = array(
		'title' => 'warning',
		'message' => 'L\'insertion n\'a pas été effectuée'
	);
	header('location: /index.php/rooms/create');
}
