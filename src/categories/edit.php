<?php

session_start();
$db = require('../../connection.php');

var_dump($_POST);
die();

$query = $db->prepare('UPDATE categories SET label = ?, `description` = ? WHERE id = ?');

$executed = $query->execute(array(
	$_POST['label'],
	$_POST['description'],
	$_POST['id']
));

if($executed) {
	$_SESSION['alert-message'] = array(
		'title' => 'success',
		'message' => 'La catégorie a été mis à jour'
	);
	header('location: /index.php/clients/list');
} else {
	$_SESSION['alert-message'] = array(
		'title' => 'warning',
		'message' => 'La mise à jour n\'a pas été effectuée'
	);
	header('location: /index.php/categories/edit');
}