<?php

namespace Testing\App;

use Testing\App\Controller\TestingController;

class Testing {
    public static function run() {

        $server = $_SERVER['REQUEST_URI'];

        $server = preg_replace('/\?.*$/', '', $server);

        $url = explode('/', $server); // padaro stringa array
        array_shift($url);  // pasalina pirma elementa is array
        // array_pop($url);
        var_dump($url);
        var_dump($server);
        return self::router($url);

    }

    private static function router($url) {

        $method = $_SERVER['REQUEST_METHOD'];


        if ($method == 'GET' && count($url) == 1 && $url[0] == 'testing') {
            return (new TestingController)->index();
            // return 'labas';
        }
        if ($method == 'GET' && count($url) == 2 && $url[0] == 'testing' && $url[1] == 'show') {
            return (new TestingController)->show();
        }
        
        // if ($method == 'GET' && count($url) == 3 && $url[0] == 'project' && $url[1] == 'testing' && $url[2] == 'show') {
        //     return (new TestingController)->index();
        //     // return 'hi';
        // }


        return '404';

    }

    public static function view($view, $data = []) {

        extract($data); 

        ob_start();
        require ROOT . 'views/top.php';
        require ROOT . "views/$view.php";
        require ROOT . 'views/bottom.php';
        $content = ob_get_clean();
        return $content;
    }

    public static function redirect($url) {
        header('Location:' . URL . "/$url");
        return null;
    }

}