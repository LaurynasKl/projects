<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Calculator</title>
</head>

<body>
    <form action="index.php" method="post">
        <div>
            <input type="submit" name="number" value="1">
            <input type="submit" name="number" value="2">
            <input type="submit" name="number" value="3">
        </div>
        <div>
            <input type="submit" name="number" value="4">
            <input type="submit" name="number" value="5">
            <input type="submit" name="number" value="6">
        </div>
        <div>
            <input type="submit" name="number" value="7">
            <input type="submit" name="number" value="8">
            <input type="submit" name="number" value="9">
        </div>
        <div>
            <input type="submit" name="number" value="0">
        </div>
        <div>
            <input type="submit" name="operator" value="+">
            <input type="submit" name="operator" value="-">
            <input type="submit" name="operator" value="*">
            <input type="submit" name="operator" value="/">
        </div>
        <div>
            <input type="submit" name="lygu" value="=">
        </div>
    </form>

</body>

</html>

<?php
$skaicius1 = $_POST['number'] ?? '';
$opratorius = $_POST['operator'] ?? '';
$skaicius2 = $_POST['number'] ?? '';

echo $skaicius1 . '<br>';
echo $opratorius;
// echo $skaicius2;