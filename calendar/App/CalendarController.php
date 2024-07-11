<?php

namespace Calendar\App;

use Calendar\App\Calendar;

class CalendarController {

    public function index() {
        $writer = new Calendar(date('Y'), date('M'), date('d'));
        $calendar = $writer->view();


        
        // extract($this->data);
        require ROOT . 'views/main.php';
        var_dump($calendar);
        return $calendar;
    }
}