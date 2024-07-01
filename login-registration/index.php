<?php
session_start();

define('ROOT', 'http://localhost/projects/login-registration/');
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
    <h1>Welcome to login and registration system project</h1>
    <p>To login press this: 
    <a href="<?php ROOT ?>login.php">Login</a>
    </p> 
    <p>To registration press this: 
    <a href="<?php ROOT ?>registration.php">Registration</a>
    </p> 
    
    <a href="<?php ROOT ?>seeder/ser.php">ser</a>

</body>
</html>