<?php

namespace BankU4\App\Controllers;

use BankU4\App\Bank;
use App\DB\FileBase;
use App\DB\MariaDB;

class DeleteController
{
    public function destroy($request) {

        $write = match (DB) {
            'file' => new FileBase('bankas'),
            'maria' => new MariaDB('bank4'),
        };

        $write->delete($request);

        return Bank::grazinam('crud/showAll');
    }

}