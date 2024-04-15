<!DOCTYPE html>
<html lang="en">

<?php include_once "layout.php"; ?>

<body>
    <?php
    require_once "ProcessLogin.php";

    $processLogin = new ProcessLogin;

    $processLogin->process();
    ?>

    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" class="form-control">
                    Email: <input type="email" name="emailAddress" class="form-control">
                    <p class="text-danger">
                        <?php echo $processLogin->error; ?>
                    </p>
                    <br>

                    Password: <input type="password" name="password" class="form-control">

                    <br>

                    <button type="submit" class="btn btn-primary">Login</button>
                </form>

                No account yet? <a href="http://sample.test/register.php">Register here</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>