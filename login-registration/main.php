<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Main Page</title>
</head>
<body>
    <h1>This is main page</h1>
    <h3>
        Hello <?= $_SESSION['username']?>
    </h3>


    <form action="http://localhost/projects/login-registration/logout.php" method="post">        
        <button type="submit">Logout</button>
    </form>
    
</body>
</html>