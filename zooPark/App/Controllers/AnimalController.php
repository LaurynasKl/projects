<?php

namespace ZooPark\App\controllers;

use App\DB\FileBase;
use App\DB\MariaBase;
use ZooPark\App\App;

class AnimalController
{

    public function index()
    {
        return App::view('main', [
            'title' => 'Zoo Park',
        ]);
    }




    // public function base($request)
    // {
    //     $value = $request;
    //     return App::view('main', [
    //         'title' => 'Zoo',
    //         'value' => $value
    //     ]);
    // }





    public function add()
    {
        return App::view('animals/add', [
            'title' => 'Adding animal'
        ]);
    }

    public function store($request) {

        $animalName = $request['animalName'] ?? null;
        $howMany = $request['howMany'] ?? null;

        match (DB) {
            'file'=> $writer = new FileBase('animals'),
            'maria' => $writer = new MariaBase('zoo'),
        };
        
        $writer->create((object) [
            'animalName' => $animalName,
            'howMany' => $howMany,
        ]);

        App::redirect('');

    }

    public function showAll(){

        match (DB) {
            'file'=> $writer = new FileBase('animals'),
            'maria' => $writer = new MariaBase('zoo'),
        };

        $showAll = $writer->showAll();

        return App::view('animals/showAll', [
            'showAll' => $showAll,
            'title' => 'All animals'
        ]);
    }

    public function edit($id) {

        match (DB) {
            'file'=> $writer = new FileBase('animals'),
            'maria' => $writer = new MariaBase('zoo'),
        };

        $animal = $writer->show($id);
        return App::view('animals/edit',[
            'title' => 'Editing animals',
            'animal' => $animal
        ]);
    }

    public function update($id, $request) {

        $animalName = $request['animalName'];
        $howMany = $request['howMany'];

        match (DB) {
            'file'=> $writer = new FileBase('animals'),
            'maria' => $writer = new MariaBase('zoo'),
        };

        $writer->update($id, (object)[
            'animalName' => $animalName,
            'howMany' => $howMany
        ]);
        App::redirect('');

    }

    public function destroy($id) {

        match (DB) {
            'file'=> $writer = new FileBase('animals'),
            'maria' => $writer = new MariaBase('zoo'),
        };

        $writer->delete($id);

        App::redirect('');
    }

}
