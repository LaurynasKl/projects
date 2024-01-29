<?php

namespace BankU4\App\Controllers;

use App\DB\FileBase;
use App\DB\MariaDB;
use BankU4\App\Bank;

class ShowController
{

    public function showAll() {


        $write = match (DB) {
            'file' => new FileBase('bankas'),
            'maria' => new MariaDB('bank4'),
        };
        $accounts = $write->showAll();
 
        return Bank::ziureti('crud/showAll', [
            'title' => 'Show all',
            'accounts' => $accounts,
        ]);

        return Bank::grazinam('crud/showAll');
    }

    public function show($code) {

        $write = match (DB) {
            'file' => new FileBase('bankas'),
            'maria' => new MariaDB('bank4'),
        };
        $account = $write->show($code);

        return Bank::ziureti('crud/show', [
            'title' => 'Show',
            'account' => $account,
        ]);
    }

}