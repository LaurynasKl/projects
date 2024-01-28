<?php

namespace BankU4\App\Controllers;

use BankU4\App\Bank;
use App\DB\FileBase;

class UpdateController
{
    public function update($id, $userData) {

        $name = $userData['name'];

        $write = new FileBase('bankas');
        $write->update($id, $userData);

    }

}