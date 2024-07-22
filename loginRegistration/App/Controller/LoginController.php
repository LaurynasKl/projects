<?php

namespace LoginRegistration\App\Controller;

use LoginRegistration\App\Auth;

class LoginController {

    public function main() {
        return Auth::view('main', [
            'title' => 'Main Page'
        ]);
    }

    public function login() {
        return Auth::view('login' , [
            'title' => 'Login'
        ]);
    }
}