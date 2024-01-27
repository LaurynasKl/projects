<?php

namespace BankU4\App\Controllers;

use App\DB\FileBase;
use BankU4\App\Bank;

class ShowController
{

    public function showAll() {

        $writer = new FileBase('bankas');
        $accounts = $writer->showAll();
 
        return Bank::grazinam('crud/showAll', [
            'title' => 'Show all',
            // 'accounts' => $accounts,
        ]);
    }

    public function show($code) {

    }

}