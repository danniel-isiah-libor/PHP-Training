<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();

    if (!isset($_SESSION["isAuth"]) && !$_SESSION["isAuth"]) {
        header("location:login.php");
        exit;
    }
    ?>

    <h1>WELCOME TO DASHBOARD</h1>
</body>

</html>