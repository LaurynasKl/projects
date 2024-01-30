<?php
namespace BankU4\App\Controllers;

use BankU4\App\Bank;
use BankU4\App\Auth;
use BankU4\App\Message;

class LoginController {

    public function index() {
        return Bank::ziureti('auth/login',[
            'title' => 'Login',
        ]);
    }

    public function login($request) {
        $email = $request['email'] ?? '';
        $password = $request['password'] ?? '';

        if (Auth::get()->tryLoginUser($email, $password)) {
            Message::get()->set('success', 'You are logged in');
            return Bank::grazinam('crud/showAll');
        }
        Message::get()->set('danger', 'Wrong email or password');
        return Bank::grazinam('crud/showAll');

    }

    public function logout() {
        Auth::get()->logout();
        Message::get()->set('warning', 'You are logged out');
        return Bank::grazinam('login');
    }

}