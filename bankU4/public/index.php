<?php
use BankU4\App\Bank;

require '../vendor/autoload.php';
define('ROOT', __DIR__. '/../'); 
define('URL', 'http://banku4.test');

echo Bank::start();