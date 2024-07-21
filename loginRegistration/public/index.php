<?php

use LoginRegistration\App\Auth;

require __DIR__ . '/../vendor/autoload.php';

define('URL', 'http://login-registration.test');
define('ROOT' , __DIR__ . '/../');

echo Auth::run();

// echo '<pre>';
// print_r($_SERVER);