<?php

namespace Calendar1\App;

class Calendar {

    public static function run() {

        $server = $_SERVER['REQUEST_URI'];

        $url = explode('/', $server);
        array_shift($url);

        return self::router($url);

    }

    private static function router($url) {

        // $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        $months = [
            1 => 'January',
            2 => 'February',
            3 => 'March',
            4 => 'April',
            5 => 'May',
            6 => 'June',
            7 => 'July',
            8 => 'August',
            9 => 'September',
            10 => 'October',
            11 => 'November',
            12 => 'December'
        ];
        // $months = implode(' ', $months);

        $data[] = [
            'year' => date('Y'),
            'month' => date('M'),
            'day' => date('d'),
            'months' => $months
        ];

        $method = $_SERVER['REQUEST_METHOD'];

        if ($method == 'GET' && count($url) == 1 && $url[0] == '') {
            return self::view('months', $data);
        }

        // if ($method == 'GET' && count($url) == 2 && $url[0] == 'views') {
        //     return self::view('index', $data, $url[1]);
        // }
        if ($method == 'GET' && count($url) == 2 && $url[0] == 'views') {
            return self::view('main', $data, $url[1]);
        }




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




}