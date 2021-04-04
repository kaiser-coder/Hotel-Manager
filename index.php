<?php

session_start();

if(!empty($_SESSION['user_id'])) {
	# Routes
	if(!empty($_GET['page'])) {

		switch ($_GET['page']) {
			case 'test':
				include 'pages/test.php';
				break;
			
			default:
				include 'pages/home.php';
				break;
		}

	} else {
		include 'pages/home.php';
	}

} else {
   include 'pages/login.php';
}
