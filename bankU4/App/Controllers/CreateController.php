<?php

namespace BankU4\App\Controllers;

use BankU4\App\Bank;

class CreateController
{

    public function create() {
        return Bank::ziureti('crud/create', [
            'title' => 'Create account',
        ]);
    }

}