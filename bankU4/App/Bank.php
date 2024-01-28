<?php

namespace BankU4\App;

use BankU4\App\Controllers\CreateController;
use BankU4\App\Controllers\HomeController;
use BankU4\App\Controllers\ShowController;
use BankU4\App\Controllers\DeleteController;
use BankU4\App\Controllers\UpdateController;

class Bank
{

    public static function start()
    {

        $server = $_SERVER['REQUEST_URI'];
        $url = explode('/', $server);
        array_shift($url);

        return self::router($url);
    }


    private static function router($url)
    {

        $method = $_SERVER['REQUEST_METHOD'];

        if ($method == 'GET' && count($url) == 1 && $url[0] == ''){
            return (new HomeController)->index();
        }
        if ($method == 'GET' && count($url) == 1 && $url[0] == 'main'){
            return (new HomeController)->main();
        }

        if ($method == 'GET' && count($url) == 2 && $url[0] == 'crud' && $url[1] == 'create'){
            return (new CreateController)->create();
        }
        if ($method == 'POST' && count($url) == 2 && $url[0] == 'crud' && $url[1] == 'store'){
            return (new CreateController)->store($_POST);
        }

        if ($method == 'GET' && count($url) == 2 && $url[0] == 'crud' && $url[1] == 'showAll'){
            return (new ShowController)->showAll();
        }
        if ($method == 'POST' && count($url) == 3 && $url[0] == 'crud' && $url[1] == 'show'){
            return (new ShowController)->show($url[2]);
        }


        if ($method == 'POST' && count($url) == 3 && $url[0] == 'crud' && $url[1] == 'update'){
            return (new UpdateController)->update($url[2], $_POST);
        }
        if ($method == 'POST' && count($url) == 3 && $url[0] == 'crud' && $url[1] == 'updateMinus'){
            return (new UpdateController)->updateMinus($url[2], $_POST);
        }


        if ($method == 'POST' && count($url) == 3 && $url[0] == 'crud' && $url[1] == 'destroy'){
            return (new DeleteController)->destroy($url[2]);
        }


        return '<h1>404</h1>';

    }



    public static function ziureti($view, $data = []){

        extract($data);
        ob_start();

        require ROOT . "views/top.php";
        require ROOT . "views/$view.php";
        require ROOT . "views/bottom.php";

        $content = ob_get_clean();

        return $content;
    }

    public static function grazinam($url) {

        header('Location: ' . URL . '/' . $url); 
        return null;
    }
}
