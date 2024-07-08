<?php

use ZooPark\App\App;

require __DIR__ . '/../vendor/autoload.php';

define('ROOT', __DIR__ . '/../');
define('URL', 'http://zoo-park.test/');

echo App::run();