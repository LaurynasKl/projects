<?php

namespace Calendar\App;

class Calendar{

    private $year, $month, $day;
    private $data = [];

    public function __construct($year, $month, $day)
    {
        $this->year = $year;
        $this->month = $month;
        $this->day = $day;


        $this->data[] = [
            'year' => $this->year,
            'month' => $this->month,
            'day' => $this->day
        ];

    }
    
    public function view() {
        
        return $this->data;

    }


    
}