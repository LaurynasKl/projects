<?php

use Calendar\App\Calendar;

require __DIR__ . '/../vendor/autoload.php';

define('ROOT', __DIR__ . '/../');

echo Calendar::index();