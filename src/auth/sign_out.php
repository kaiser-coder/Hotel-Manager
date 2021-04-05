<?php

session_start();
session_destroy();

unset($db);

header('location: /index.php');