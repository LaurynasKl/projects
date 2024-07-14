<?php

use Calendar1\App\Calendar;

require __DIR__ . '/../vendor/autoload.php';

define('URL' , 'http://calendar.test');
define('ROOT', __DIR__ . '/../');


echo Calendar::run();