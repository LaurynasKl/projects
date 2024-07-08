<?php 

namespace ZooPark\App;

use ZooPark\App\controllers\AnimalController;

class App {

    public static function run(){

        $server = $_SERVER['REQUEST_URI'];
        $url = explode('/', $server);
        array_shift($url);

        return self::router($url);
    }


    private static function router($url){

        $method = $_SERVER['REQUEST_METHOD'];

        if ($method == 'GET' && count($url) == 1 && $url[0] == '') {
            return (new AnimalController)->index();
        }
        //                                                      create
        if ($method == 'GET' && count($url) == 2 && $url[0] == 'animals' && $url[1] == 'add') {
            return (new AnimalController)->add();
        }

        if ($method == 'POST' && count($url) == 2 && $url[0] == 'animals' && $url[1] == 'store') {
            return (new AnimalController)->store($_POST);
        }



    }


    public static function view($view, $data = []) {
        extract($data);

        ob_start();
        require ROOT . '/views/top.php';
        require ROOT . "/views/$view.php";
        require ROOT . '/views/bottom.php';

        $content = ob_get_clean();
        return $content;
    }
}