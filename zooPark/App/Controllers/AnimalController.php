<?php

namespace ZooPark\App\controllers;

use App\DB\FileBase;
use ZooPark\App\App;

class AnimalController
{

    public function index()
    {
        return App::view('main', [
            'title' => 'Zoo Park'
        ]);
    }

    public function add()
    {
        return App::view('animals/add', [
            'title' => 'Adding animal'
        ]);
    }

    public function store($request) {

        $animalName = $request['animalName'] ?? null;
        $howMany = $request['howMany'] ?? null;

        $writer = new FileBase('animals');

        $writer->create((object) [
            'animalName' => $animalName,
            'howMany' => $howMany,
        ]);

        App::redirect('');

    }

 
}
