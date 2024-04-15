<!DOCTYPE html>
<html lang="en">

<?php include_once "layout.php"; ?>

<body>
    <?php
    session_start();

    if (!isset($_SESSION["isAuth"]) && !$_SESSION["isAuth"]) {
        header("location:login.php");
        exit;
    }
    ?>

    <h1>WELCOME TO DASHBOARD</h1>

    <form action="UploadFile.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">

        <button type="submit">Upload File</button>
    </form>

    <form action="FileHandle.php" method="get">
        <button type="submit" class="btn btn-secondary">Read File</button>
    </form>

    <form action="ProcessLogout.php" method="get">
        <button type="submit" class="btn btn-primary">Logout</button>
    </form>
</body>

</html>