<?php

namespace BankU4\App\Controllers;

use App\DB\FileBase;
use BankU4\App\Bank;

class ShowController
{

    public function showAll() {


        $writer = new FileBase('bankas');
        $accounts = $writer->showAll();
 
        return Bank::ziureti('crud/showAll', [
            'title' => 'Show all',
            'accounts' => $accounts,
        ]);

        return Bank::grazinam('crud/showAll');
    }

    public function show($code) {

        $writer = new FileBase('bankas');
        $account = $writer->show($code);

        return Bank::ziureti('crud/show', [
            'title' => 'Show',
            'account' => $account,
        ]);
    }

}