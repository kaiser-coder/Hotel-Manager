<?php

if(isset($_SERVER['PATH_INFO'])) {
	switch ($_SERVER['PATH_INFO']) {
		case '/home':
			$page = 'home';
			break;

		case '/clients/register':
			$page = 'clients/client_form';
			break;

		case '/clients/list':
			$page = 'clients/client_list';
			break;

		case '/clients/edit':
			$page = 'clients/client_update';
			break;
		
		default:
			$page = '404';
			break;
	}

} else {
	$page = '404';
}