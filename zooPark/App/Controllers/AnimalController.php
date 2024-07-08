<?php

namespace ZooPark\App\controllers;

use ZooPark\App\App;

class AnimalController {

    public function index() {
        return App::view('main',[
            'title' => 'Zoo Park'
        ]);
    }

    public function add() {
        return App::view('animals/add', [
            'title' => 'Adding animal'
        ]);
    }

    public function store($request) {
        $animalName = $request['animalName'];
        $howMany = $request['howMany'];

        
    }
}