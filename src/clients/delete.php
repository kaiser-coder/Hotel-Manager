<?php

session_start();
$db = require('connection.php');

$executed = $db->query('DELETE clients WHERE id = '. $_GET['id']);

if($executed) {
	$_SESSION['alert-message'] = array(
		'title' => 'success',
		'message' => 'Le client a été supprimée'
	);
} else {
	$_SESSION['alert-message'] = array(
		'title' => 'warning',
		'message' => 'La suppression a été annulée'
	);
}

header('location: /index.php/clients/list');