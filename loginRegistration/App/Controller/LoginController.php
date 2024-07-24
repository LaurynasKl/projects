<?php

namespace LoginRegistration\App\Controller;

use App\DB\MariaBase;
use LoginRegistration\App\Auth;

class LoginController {

    public function index() {
        return Auth::view('auth', [
            'title' => 'Login'
        ]);
    }


    public function main($request) {

        $email = $request['email'];
        $password = sha1($request['password']);


        $writer = new MariaBase('auth');
        $users = $writer->showAll();

        foreach ($users as $user) {
            if ($user->email == $email) {
                // return $user->id;
                // $user->show($user->id);
                
                return Auth::view('main', [
                    'title' => 'Main Page',
                    'user' => $user
                ]);

            }
        }     



    }

    public function logout() {

    }
    
 



    // public function signUp($request) {
    //     $email = $request['email'] ?? null;
    //     $username = $request['username'] ?? null;
    //     $password = sha1($request['password']) ?? null;

    //     $writer = new MariaBase('auth');
    //     $writer->create((object)[
    //         'email' => $email,
    //         'username' => $username,
    //         'password' => $password,
    //     ]);
    // }

}