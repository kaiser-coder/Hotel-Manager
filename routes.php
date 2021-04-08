<?php

if(isset($_SERVER['PATH_INFO'])) {
	switch ($_SERVER['PATH_INFO']) {
		case '/dashboard/home':
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

		case '/bookings/register':
			$page = 'bookings/booking_form';
			break;

		case '/categories/add':
			$page = 'categories/category_form';
			break;

		case '/categories/list':
			$page = 'categories/category_list';
			break;
		
		default:
			$page = '404';
			break;
	}

} else {
	$page = '404';
}