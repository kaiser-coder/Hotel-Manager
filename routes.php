<?php

if(isset($_SERVER['PATH_INFO'])) {
	switch ($_SERVER['PATH_INFO']) {
		case '/home':
			$page = 'home';
			break;

		case '/clients/register':
			$page = 'client_form';
			break;

		case '/clients/list':
			$page = 'client_list';
			break;
		
		default:
			die('Error 404');
			break;
	}

} else {
	die('Error 404');
}