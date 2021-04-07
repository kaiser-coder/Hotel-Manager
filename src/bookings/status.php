<?php

session_start();
$db = require('../../connection.php');

switch ($_GET['status']) {
	case 'cancel':
		$new_status = 'annulee';
		break;
	
	case 'regain':
		$new_status = 'en attente';
		break;
	
	default:
		$new_status = 'prise';
		break;
}

$query = $db->prepare('UPDATE bookings SET `status` = ?  WHERE id = ?');
$executed = $query->execute(array($new_status, $_GET['id']));

if($executed) {
	$_SESSION['alert-message'] = array(
		'title' => 'success',
		'message' => 'Le status de votre réservation a été modifié'
	);
} else {
	$_SESSION['alert-message'] = array(
		'title' => 'warning',
		'message' => 'La modification du status a échoué'
	);
}

header('location: /index.php/dashboard/home');