<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'post') {

}
if (isset($_SESSION['login'])) {
    unset($_SESSION['login']);
    unset($_SESSION['username']);
}

header('Location: http://localhost/projects/login-registration/');