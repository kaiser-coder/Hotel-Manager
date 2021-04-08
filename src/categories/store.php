<?php

session_start();
$db = require('../../connection.php');

# Insert category
$query = $db->prepare('INSERT INTO categories(label, `description`) VALUES (?, ?)');
$executed = $query->execute(array(
	$_POST['label'],
	$_POST['description']
));

if($executed) {
	$_SESSION['alert-message'] = array(
		'title' => 'success',
		'message' => 'La nouvelle catégorie <b>'. $_POST['label'] .'</b> a été ajouté'
	);
	header('location: /index.php/clients/list');
} else {
	$_SESSION['alert-message'] = array(
		'title' => 'warning',
		'message' => 'L\'insertion n\'a pas été effectuée'
	);
	header('location: /index.php/categories/list');
}
