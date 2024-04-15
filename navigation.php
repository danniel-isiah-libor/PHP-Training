<div style="width: 100%; height: 50px; margin-bottom: 5px; background-color: black; padding-top: 5px">
    <div class="d-flex">
        <a href="http://sample.test/index.php" class="btn btn-secondary">Dashboard</a>

        <a href="http://sample.test/create-post.php" class="btn btn-primary" style="margin-left: 10px; margin-right: 10px">Create Post</a>

        <form action="http://sample.test/ProcessLogout.php" method="get">
            <button type="submit" class="btn btn-primary">Logout</button>
        </form>

        <?php
        if (!isset($_SESSION)) session_start();

        $email = $_SESSION["email"];

        echo "<p class='text-white'>You are logged in as: $email</p>";
        ?>
    </div>
</div>