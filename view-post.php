<!DOCTYPE html>
<html lang="en">

<?php include "layout.php" ?>

<body>
    <?php
    include_once "navigation.php";
    include "services/Database.php";
    include_once "ProcessView.php";
    ?>

    <h1>WELCOME TO VIEW POST</h1>

    <br>

    <?php
    if ($_SESSION["userId"] == $post["user_id"]) :
    ?>

        <div class="d-flex">
            <a href="http://sample.test/edit-post.php/?id=<?php echo $id; ?>" class="btn btn-warning" style="margin-right: 5px">EDIT POST</a>

            <form action="http://sample.test/ProcessDelete.php" method="post">
                <input type="hidden" value="<?php echo $id; ?>" name="id">
                <button type="submit" class="btn btn-danger">DELETE POST</button>
            </form>
        </div>

    <?php endif; ?>

    <h2>
        <?php echo $post["title"]; ?>
    </h2>

    <i>
        <small>
            Posted by: <?php echo $post["email"]; ?>
        </small>
    </i>

    <p>
        <?php echo $post["body"]; ?>
    </p>
</body>

</html>