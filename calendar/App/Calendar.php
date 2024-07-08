<?php

namespace Calendar\App;

use Calendar\App\Controller\CalendarController;

class Calendar{

    public static function index(){

        $calendar = new CalendarController(date('Y'), date('D'), date('M'));

        return $calendar;

    }
    
}