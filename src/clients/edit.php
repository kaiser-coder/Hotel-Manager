<?php

session_start();
$db = require('../../connection.php');
/* 
var_dump($_POST);
exit; */

$query = $db->prepare('UPDATE clients SET first_name = ?, last_name = ?, gender = ?, nationality = ?, `address` = ?, phone_number = ?, ID_card = ? WHERE id = ?');

$executed = $query->execute(array(
	$_POST['first_name'],
	$_POST['last_name'],
	$_POST['gender'],
	$_POST['nationality'],
	$_POST['address'],
	$_POST['phone_number'],
	$_POST['id_card'],
	$_POST['id']
));

if($executed) {
	$_SESSION['alert-message'] = array(
		'title' => 'success',
		'message' => $_POST['first_name'] .' '. $_POST['last_name'] .' a été mis à jour'
	);
	header('location: /index.php/clients/list');
} else {
	$_SESSION['alert-message'] = array(
		'title' => 'warning',
		'message' => 'La mise à jour n\'a pas été effectuée'
	);
	header('location: /index.php/clients/edit');
}