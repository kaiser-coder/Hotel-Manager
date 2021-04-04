<?php

if(!empty($_GET['page'])) {
	switch ($_GET['page']) {
		case 'test':
			$page = 'test';
			break;

		case 'client_add':
			$page = 'client_form';
			break;
		
		default:
			$page = 'home';
			break;
	}

} else {
	$page = 'home';
}