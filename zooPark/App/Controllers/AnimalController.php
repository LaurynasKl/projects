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

    public function showAll(){
        $writer = new FileBase('animals');
        $showAll = $writer->showAll();

        return App::view('animals/showAll', [
            'showAll' => $showAll,
            'title' => 'All animals'
        ]);
    }

 

    public function edit($id) {

        $writer = new FileBase('animals');
        $animal = $writer->show($id);
        return App::view('animals/edit',[
            'title' => 'Editing animals',
            'animal' => $animal
        ]);
    }


    public function update($id, $request) {

        $animalName = $request['animalName'];
        $howMany = $request['howMany'];

        $writer = new FileBase('animals');
        $writer->update($id, (object)[
            'animalName' => $animalName,
            'howMany' => $howMany
        ]);
        App::redirect('');

    }

    public function destroy($id) {

        $writer = new FileBase('animals');
        $writer->delete($id);

        App::redirect('');
    }



}
