<!DOCTYPE html>
<html lang="en">

<?php include_once "layout.php"; ?>

<body>
    <?php
    include_once "navigation.php";
    include "services/Database.php";
    include_once "ProcessCreatePost.php";

    $process = new ProcessCreatePost;

    $process->process();
    ?>

    <h1>WELCOME TO CREATE POST</h1>

    <form class="form-control" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
        <?php include_once "form-post.php" ?>
    </form>
</body>

</html>