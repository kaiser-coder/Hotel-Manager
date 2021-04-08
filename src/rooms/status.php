<?php

session_start();
$db = require('../../connection.php');

$query1 = $db->query('SELECT `available` FROM  rooms WHERE id = '. $_GET['id']);
$result = $query1->fetch(PDO::FETCH_ASSOC);

$new_status = $result['status'] == true ? false : true;

$query2 = $db->prepare('UPDATE `categories` SET `status` = ?  WHERE id = ?');
$executed = $query2->execute(array($new_status, $_GET['id']));

if($executed) {
	$_SESSION['alert-message'] = array(
		'title' => 'success',
		'message' => 'Le status de la chambre a été mis à jour'
	);
} else {
	$_SESSION['alert-message'] = array(
		'title' => 'warning',
		'message' => 'La mise à jour du status a été annulée'
	);
}

header('location: /index.php/clients/list');