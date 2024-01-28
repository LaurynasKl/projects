<?php

namespace BankU4\App\Controllers;

use BankU4\App\Bank;
use App\DB\FileBase;

class DeleteController
{
    public function destroy($request) {

        $write = new FileBase('bankas');
        $write->delete($request);

        return Bank::grazinam('crud/showAll');
    }

}