<?php

session_start();
$db = require('connection.php');

$executed = $db->query('DELETE bookings WHERE id = '. $_GET['id']);

if($executed) {
	$_SESSION['alert-message'] = array(
		'title' => 'success',
		'message' => 'La réservation a été supprimée'
	);
} else {
	$_SESSION['alert-message'] = array(
		'title' => 'warning',
		'message' => 'La suppression a échouée'
	);
}

header('location: /index.php/dashboard/home');