<?php

namespace LoginRegistration\App;

use LoginRegistration\App\Controller\LoginController;

class Auth {

    public static function run() {

        $server = $_SERVER['REQUEST_URI'];
        $url = explode('/', $server);
        array_shift($url);
        // var_dump($url);

        return self::router($url);
    }


    public static function router($url) {

        $method = $_SERVER['REQUEST_METHOD'];

        if ($method == 'GET' && count($url) == 1 && $url[0] == '') {
            return (new LoginController)->login();
        };
        
    }

    public static function view($view, $data = []) {

        extract($data);

        require ROOT . 'views/top.php';
        require ROOT . "views/$view.php";
        require ROOT . 'views/bottom.php';

    }
    

}