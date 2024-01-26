<?php

namespace BankU4\App\Controllers;

use BankU4\App\Bank;

class HomeController
{

    public function index() {
        return Bank::ziureti('login', [
            'title' => 'Login Page',
        ]);
    }
    public function main() {
        return Bank::ziureti('main', [
            'title' => 'Main Page',
        ]);
    }

}