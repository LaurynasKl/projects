<?php

namespace BankU4\App\Controllers;

use BankU4\App\Bank;
use App\DB\FileBase;

class CreateController
{

    public function create() {
        return Bank::ziureti('crud/create', [
            'title' => 'Create account',
        ]);
    }

    public function store($request) {
        $name = $request['name'];
        $surname = $request['surnmae'];
        $code = $request['code'];
        $account = $request['account'];


        $write = new FileBase('bankas');

        $write->create((object) [
            'name' => $name,
            'surname' => $surname,
            'code' => $code,
            'account' => $account,
        ]);

    }

}