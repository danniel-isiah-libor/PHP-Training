<!DOCTYPE html>
<html lang="en">

<?php include_once "layout.php"; ?>

<body>
    <?php
    require_once "ProcessRegister.php";

    $processRegister = new ProcessRegister;

    $processRegister->process();
    ?>

    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" class="form-control" enctype="multipart/form-data">
                    <input type="file" name="avatar" class="form-control">
                    <p>
                        <?php echo $processRegister->errors["avatar"] ?? ""; ?>
                    </p>

                    Name: <input class="form-control" type="text" name="name" class="form-control">

                    <p class="text-danger">
                        <?php
                        // if (isset($processRegister->errors["name"])) {
                        //     echo $processRegister->errors["name"];
                        // }
                        // echo (isset($processRegister->errors["name"])) ? $processRegister->errors["name"] : "";
                        echo $processRegister->errors["name"] ?? "";
                        ?>
                    </p>

                    <br>

                    Email: <input type="email" name="email" class="form-control">
                    <p class="text-danger"><?php echo $processRegister->errors["email"] ?? ""; ?></p>

                    <br>

                    Password: <input type="text" name="password" class="form-control">
                    <p class="text-danger"><?php echo $processRegister->errors["password"] ?? ""; ?></p>

                    <br>

                    Confirm Password: <input type="text" name="confirmPassword" class="form-control">
                    <p class="text-danger"><?php echo $processRegister->errors["confirmPassword"] ?? ""; ?></p>

                    <br>

                    <button type="submit" class="btn btn-primary">Register</button>
                </form>

                Already have an account? <a href="http://sample.test/login.php">Login here</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>