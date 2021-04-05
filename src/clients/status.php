<?php

$db = require('connection.php');

$status = $db->query('SELECT `status` FROM  clients WHERE id = '. $_GET['id']);
$new_state = $status == 'active' ? 'inactive' : 'active';

$query = $db->prepare('UPDATE clients SET `status` = ?  WHERE id = '. $_GET['id']);
$executed = $query->exec(array($new_state));

if($executed) {
	$_SESSION['alert-message'] = array(
		'title' => 'success',
		'message' => 'La mise à jour a été effectuée'
	);
} else {
	$_SESSION['alert-message'] = array(
		'title' => 'warning',
		'message' => 'La mise à jour a été annulée'
	);
}

header('location: /index.php/clients/list');