<?php

namespace ZooPark\App\controllers;

use ZooPark\App\App;

class AnimalController {

    public function index() {
        return App::view('main');
    }
}