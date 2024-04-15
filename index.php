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

    <?php include_once "navigation.php"; ?>

    <h1>WELCOME TO DASHBOARD</h1>

    <br>

    <div class="form-control">
        <a href="view-post.php">
            <h2>Post Title</h2>
        </a>

        <i>
            <small>Posted by: Danniel Libor</small>
        </i>
    </div>

    <br>

    <div class="form-control">
        <a href="view-post.php">
            <h2>Post Title</h2>
        </a>

        <i>
            <small>Posted by: Danniel Libor</small>
        </i>
    </div>

    <br>

    <div class="form-control">
        <a href="view-post.php">
            <h2>Post Title</h2>
        </a>

        <i>
            <small>Posted by: Danniel Libor</small>
        </i>
    </div>

    <!-- <form action="UploadFile.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit">Upload File</button>
    </form>

    <form action="FileHandle.php" method="get">
        <button type="submit" class="btn btn-secondary">Read File</button>
    </form> -->


</body>

</html>