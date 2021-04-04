<?php

session_start();

if(!empty($_SESSION['user_id'])) {
	require('routes.php');
	include 'template/main.php';
} else {
   include 'template/pages/login.php';
}
