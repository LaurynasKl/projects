<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration</title>
</head>

<body>

    <?php require __DIR__ . '/parts/msg.php' ?>


    <h1>Create new account</h1>
    <form action="" method="POST">
        Create new username <br>
        <input type="text" name="username"> <br>
        Create new password <br>
        <input type="password" name="password"> <br>
        Enter your number <br>
        <input type="text" name="number"> <br>
        Enter your age <br>
        <input type="text" name="age"> <br>
        <button type="submit">Regitration</button>
    </form>
    <p>If you already have account please login <a href="http://localhost/projects/login-registration/login.php">here</a></p>
</body>

</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $accounts = file_get_contents(__DIR__ . '/data/accounts.ser');
    $accounts = unserialize($accounts);

    foreach ($accounts as $key => $account) {
        if ($account['username'] == $_POST['username']) {
            $_SESSION['error'] = 'This username is alrady taken';
            header('Location: http://localhost/projects/login-registration/registration.php');
            exit;
        }
        if (strlen($account['number']) > 8 || strlen($account['number']) < 8 ){
            $_SESSION['error'] = 'Wrong number';
            header('Location: http://localhost/projects/login-registration/registration.php');
            exit;
        }

    }

    $account = [
        'username' => $_POST['username'],
        'password' => sha1($_POST['password']),
        'number' => $_POST['number'],
        'age' => $_POST['age']
    ];
    $accounts[] = $account;
    file_put_contents(__DIR__ . '/data/accounts.ser', serialize($accounts));

    $_SESSION['success'] = "You created account";

    header('Location: http://localhost/projects/login-registration');
    exit;
}
