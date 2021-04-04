<?php

if(!empty($_GET['page'])) {
	switch ($_GET['page']) {
		case 'test':
			$page = 'test';
			break;
		
		default:
			$page = 'home';
			break;
	}

} else {
	$page = 'home';
}