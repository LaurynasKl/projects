<?php

namespace LoginRegistration\App;

use LoginRegistration\App\Controller\LoginController;
use LoginRegistration\App\DB\MariaBase;

class Auth {

    private static $auth;
    private $login = false;
    private $user;

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
            return (new LoginController)->index();
        };

        if ($method == 'POST' && count($url) == 1 && $url[0] == 'main') {
            return (new LoginController)->main($_POST);
        };
        if ($method == 'POST' && count($url) == 1 && $url[0] == 'logout') {
            return (new LoginController)->logout();
        };




        return '404';
        
    }

    public static function view($view, $data = []) {

        extract($data);

        require ROOT . 'views/top.php';
        require ROOT . "views/$view.php";
        require ROOT . 'views/bottom.php';

    }
    
    public static function redirect($url) {
        header('Location:' . URL . "/$url");
        return null;
    }

}