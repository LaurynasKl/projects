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

        $id = $request['id'];
        $name = $request['name'];
        $surname = $request['surname'];
        $code = $request['code'];
        $account = $request['account'];
        
        $money = 0;


        $write = new FileBase('bankas');

        $write->create((object) [
            'id' => $id,
            'name' => $name,
            'surname' => $surname,
            'code' => $code,
            'account' => $account,
            'money' => $money,
        ]);

        return Bank::grazinam('crud/showAll',[
            'title' => 'Show All',
        ]);
    }

}