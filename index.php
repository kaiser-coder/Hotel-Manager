<?php

# Database connexion
$config = require(__DIR__.'/config.php');

$dns = 'mysql:host='. $config['host'] .';dbname='. $config['db_name'];
$user = $config['user'];
$password = $config['password'];

try {
   $bdd = new PDO($dns, $user, $password);
} catch (Exception $e) {
   throw $e;
}

# Routes
if(isset($_GET['pages'])) {
   switch ($_GET['pages']) {
      case 'booking':
         include __DIR__. '/pages/booking/test.php';
         break;
      
      default:
         include __DIR__. '/pages/dashboard/home.php';
         break;
   }
} else {
   include __DIR__. '/pages/dashboard/home.php';
}
