<?php
use BankU4\App\Bank;
use BankU4\App\Message;
use BankU4\App\Auth;

session_start();

require '../vendor/autoload.php';

define('DB', 'file');

define('ROOT', __DIR__. '/../'); 
define('URL', 'http://banku4.test');

Auth::get();
Message::get();

echo Bank::start();