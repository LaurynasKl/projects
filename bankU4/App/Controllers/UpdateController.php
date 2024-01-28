<?php

namespace BankU4\App\Controllers;

use BankU4\App\Bank;
use App\DB\FileBase;

class UpdateController
{
    public function update($id, $userData) {

        $money = $userData['money'] ?? 0;

        $write = new FileBase('bankas');
        $write->update($id, (object) [
            'money' => $money,
        ]);
        return Bank::grazinam('crud/showAll');
    }

    public function updateMinus($id, $userData) {

        $money = $userData['money'] ?? 0;

        $write = new FileBase('bankas');
        $write->updateMinus($id, (object) [
            'money' => $money,
        ]);
        return Bank::grazinam('crud/showAll');
    }
}