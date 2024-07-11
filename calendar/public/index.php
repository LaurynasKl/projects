<?php

use Calendar\App\Calendar;

require __DIR__ . '/../vendor/autoload.php';

define('ROOT', __DIR__ . '/../');


$calendar = new Calendar(date('Y'), date('m'), date('d'));

$calendar->view();