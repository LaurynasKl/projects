<?php

namespace BankU4\App\Controllers;

use BankU4\App\Bank;
use App\DB\FileBase;
use App\DB\MariaDB;

class UpdateController
{
    public function update($id, $userData) {

        $money = $userData['money'] ?? 0;

        $write = match (DB) {
            'file' => new FileBase('bankas'),
            'maria' => new MariaDB('bank4'),
        };

        $write->update($id, (object) [
            'money' => $money,
        ]);
        return Bank::grazinam('crud/showAll');
    }

    public function updateMinus($id, $userData) {

        $money = $userData['money'] ?? 0;

        $write = match (DB) {
            'file' => new FileBase('bankas'),
            'maria' => new MariaDB('bank4'),
        };

        $write->updateMinus($id, (object) [
            'money' => $money,
        ]);
        return Bank::grazinam('crud/showAll');
    }
}