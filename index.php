<!DOCTYPE html>
<html lang="en">

<?php include_once "layout.php"; ?>

<body>
    <?php
    include "ProcessDashboard.php";

    $dashboard = new ProcessDashboard;

    $dashboard->process();
    ?>

    <?php
    include_once "navigation.php";

    $avatar = $_SESSION["avatar"];
    ?>

    <img src="<?php echo $avatar; ?>" style="width: 100px">

    <h1>WELCOME TO DASHBOARD</h1>

    <br>

    <?php
    if (count($dashboard->records) < 1) echo "no records found!";

    foreach ($dashboard->records as $record) {
        $title = $record['title'];
        $email = $record["email"];
        $id = $record["id"];

        echo "
        <div class='form-control'>
            <a href='http://sample.test/view-post.php/?id=$id'>
                <h2>$title</h2>
            </a>

            <i>
                <small>Posted by: $email</small>
            </i>
        </div>

        <br>
        ";
    }

    // while ($row = $dashboard->records) {
    //     echo "
    //     <div class='form-control'>
    //         <a href='view-post.php'>
    //             <h2>Post Title</h2>
    //         </a>

    //         <i>
    //             <small>Posted by: Danniel Libor</small>
    //         </i>
    //     </div>

    //     <br>
    //     ";
    // }
    ?>

    <!-- <form action="UploadFile.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit">Upload File</button>
    </form>

    <form action="FileHandle.php" method="get">
        <button type="submit" class="btn btn-secondary">Read File</button>
    </form> -->


</body>

</html>