<?php

session_start();
$db = require('../../connection.php');

var_dump($_POST);
exit;

# Insert booking
$query = $db->prepare('INSERT INTO bookings(client_id, room, `begin`, `end`, `duration`) VALUES (:client_id, :room_id, :begin, ADDDATE(:begin, INTERVAL :duration days), :duration)');

$executed = $query->exec(array(
	':client_id' => $_POST['client_id'],
	':room'      => $_POST['room'],
	':begin'     => $_POST['begin'],
	':duration'  => $_POST['duration']
));

if($executed) {
	$_SESSION['alert-message'] = array(
		'title' => 'success',
		'message' => 'La réservation a été effectuée'
	);
	header('location: /index.php/dashboard/home');
} else {
	$_SESSION['alert-message'] = array(
		'title' => 'warning',
		'message' => 'La réservation n\'a pas été effectuée'
	);
	header('location: /index.php/bookings/register');
}
