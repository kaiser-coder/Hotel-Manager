<?php

session_start();
$db = require('../../connection.php');

var_dump($_POST);
die();

$query = $db->prepare('UPDATE rooms SET `number` = ? WHERE id = ?');

$executed = $query->execute(array(
	$_POST['number'],
	$_POST['id']
));

if($executed) {
	$_SESSION['alert-message'] = array(
		'title' => 'success',
		'message' => 'La chambre a été mis à jour'
	);
	header('location: /index.php/clients/list');
} else {
	$_SESSION['alert-message'] = array(
		'title' => 'warning',
		'message' => 'La mise à jour n\'a pas été effectuée'
	);
	header('location: /index.php/clients/edit');
}