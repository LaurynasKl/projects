<?php

namespace Calendar\App;

class Calendar{

    private $year, $month, $day;
    private $data = [];

    public function __construct($year, $month, $day)
    {
        $this->data[] = $year;
        $this->data[] = $month;
        $this->data[] = $day;
    }
    
    public function view() {

        // extract($this->data);
        require ROOT . 'views/main.php';
        return $this->data;

    }


    
}