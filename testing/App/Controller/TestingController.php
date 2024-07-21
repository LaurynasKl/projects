<?php

namespace Testing\App\Controller;

use Testing\App\Testing;

class TestingController {

    public function index() {

        return Testing::view('main', [
            'title' => 'testing page',
        ]);
    }


    public function show() {
        return Testing::view('test/show', [
            'title' => 'show page',
        ]);
    }

}