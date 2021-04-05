<?php

$db = require('connection.php');

# Insert client
$query = $db->prepare('INSERT INTO clients(first_name, last_name, gender, nationality, `address`, phone_number) VALUES (?, ?, ?, ?, ?, ?)');
$executed = $query->exec(array(
	$_POST['first_name'],
	$_POST['last_name'],
	$_POST['gender'],
	$_POST['nationality'],
	$_POST['address'],
	$_POST['phone_number']
));

if($executed) {
	$_SESSION['alert-message'] = array(
		'title' => 'success',
		'message' => $_POST['first_name'] .' '. $_POST['last_name'] .' a été ajouté comme nouveau client'
	);
	header('location: /index.php/clients/list');
} else {
	$_SESSION['alert-message'] = array(
		'title' => 'warning',
		'message' => 'L\'insertion n\'a pas été effectuée'
	);
	header('location: /index.php/clients/register');
}
