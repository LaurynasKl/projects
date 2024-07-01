<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $accounts = file_get_contents(__DIR__. '/data/accounts.ser');
    $accounts = unserialize($accounts);

    foreach ($accounts as $key => $account) {
        if ($account['username'] == $_POST['username']) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['login'] = 1;
            header('Location: http://localhost/projects/login-registration/main.php');
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    
    <?php require __DIR__ . '/parts/msg.php' ?>

    <h1>You can login here</h1>
    <form action="http://localhost/projects/login-registration/login.php" method="POST">
        Enter your username: <br>
        <input type="text" name="username"> <br>
        Enter your password: <br>
        <input type="password" name="password"> <br>
        <button type="submit">Login</button>
    </form>
    <p>If you dont have account, you can create <a href="http://localhost/projects/login-registration/registration.php">here</a></p>
</body>
</html>