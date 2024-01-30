<?php

namespace BankU4\App\Controllers;

use BankU4\App\Bank;
use App\DB\FileBase;
use App\DB\MariaDB;
use BankU4\App\Message;

class CreateController
{

    public function create()
    {
        return Bank::ziureti('crud/create', [
            'title' => 'Create account',
        ]);
    }

    public function store($request)
    {

        // $id = $request['id'];
        $name = $request['name'];
        $surname = $request['surname'];
        $code = $request['code'];
        $account = $request['account'];

        $money = 0;

        if ($name >= 3 && $surname >= 3 && strlen($code) == 11) {
            $write = match (DB) {
                'file' => new FileBase('bankas'),
                'maria' => new MariaDB('bank4'),
            };

            $write->create((object) [
                // 'id' => $id,
                'name' => $name,
                'surname' => $surname,
                'code' => $code,
                'account' => $account,
                'money' => $money,
            ]);

            Message::get()->set('success', "$name $surname create account");

            return Bank::grazinam('crud/showAll', [
                'title' => 'Show All',
            ]);
        }
        return Bank::grazinam('crud/create');
    }
}
