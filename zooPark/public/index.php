<?php

use ZooPark\App\App;

require __DIR__ . '/../vendor/autoload.php';

define('ROOT', __DIR__ . '/../');
define('CSS', 'http://zoo-park.test');
define('URL', 'https://lightslategray-gorilla-244477.hostingersite.com/project/zooPark');

define('DB', 'file');

echo App::run();

