<?php

namespace BankU4\App\Controllers;

use BankU4\App\Bank;

class ShowController
{

    public function showAll() {
        return Bank::ziureti('crud/showAll', [
            'title' => 'All account',
        ]);
    }

}