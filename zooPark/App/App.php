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
        //                                                                              create
        if ($method == 'GET' && count($url) == 2 && $url[0] == 'animals' && $url[1] == 'add') {
            return (new AnimalController)->add();
        }

        if ($method == 'POST' && count($url) == 2 && $url[0] == 'animals' && $url[1] == 'store') {
            return (new AnimalController)->store($_POST);
        }


        if ($method == 'GET' && count($url) == 2 && $url[0] == 'animals' && $url[1] == 'showAll') {
            return (new AnimalController)->showAll();
        }

        if ($method == 'GET' && count($url) == 3 && $url[0] == 'animals' && $url[1] == 'edit') {
            return (new AnimalController)->edit($url[2]);
        }
        if ($method == 'POST' && count($url) == 3 && $url[0] == 'animals' && $url[1] == 'update') {
            return (new AnimalController)->update($url[2], $_POST);
        }

        if ($method == 'POST' && count($url) == 3 && $url[0] == 'animals' && $url[1] == 'destroy') {
            return (new AnimalController)->destroy($url[2]);
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

    public static function redirect($url) {
        header('Location:' . URL . "/$url");
        return null;
    }
}