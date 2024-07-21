<?php

namespace LoginRegistration\App\Controller;

use LoginRegistration\App\Auth;

class LoginController {

    public function login() {
        return Auth::view('login' , [
            'title' => 'Login'
        ]);
    }
}