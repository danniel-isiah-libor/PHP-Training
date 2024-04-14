<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    require_once "ProcessRegister.php";

    $processRegister = new ProcessRegister;

    $processRegister->process();
    ?>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        Name: <input class="form-control" type="text" name="name" value="
        <?php
        // if (isset($_POST["name"])) echo $_POST["name"];
        ?>">

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

        Email: <input type="email" name="email">
        <p style="color: red"><?php echo $processRegister->errors["email"]; ?></p>

        <br>

        Password: <input type="text" name="password">
        <p style="color: red"><?php echo $processRegister->errors["password"]; ?></p>

        <br>

        Confirm Password: <input type="text" name="confirmPassword">
        <p style="color: red"><?php echo $processRegister->errors["confirmPassword"]; ?></p>

        <br>

        <input type="submit">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>