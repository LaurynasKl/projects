<?php

use Testing\App\Testing;

require __DIR__ . '/../vendor/autoload.php';

// define('URL', 'https://lightslategray-gorilla-244477.hostingersite.com/project/testing');
define('URL', 'http://testing.test/testing');

define('ROOT', __DIR__ . '/../');

echo Testing::run();