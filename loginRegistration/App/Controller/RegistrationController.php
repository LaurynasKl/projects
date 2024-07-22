<?php

namespace LoginRegistration\App\Controller;

use LoginRegistration\App\Auth;

class RegistrationController {

    public function registration() {
        return Auth::view('registration' , [
            'title' => 'Registration'
        ]);
    }
}