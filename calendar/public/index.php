<?php

use Calendar\App\Calendar;
use Calendar\App\CalendarController;

require __DIR__ . '/../vendor/autoload.php';

define('URL', 'http://localhost/projects/calendar/public');

define('ROOT', __DIR__ . '/../');


$calendar = new Calendar(date('Y'), date('M'), date('d'));

$calendar->view();

// $calendar = new CalendarController();
// $calendar->index();