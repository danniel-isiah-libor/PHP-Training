<?php
include "services/LoginClass.php";

use services\LoginClass;

class ProcessLogin
{
    public function __construct()
    {
        session_start();

        if (isset($_SESSION["isAuth"]) && $_SESSION["isAuth"]) {
            header("location:dashboard.php");
            exit;
        }
    }

    public function process()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['emailAddress'];
            $password = $_POST['password'];

            $loginClass = new LoginClass($email, $password);

            $loginClass->authenticate();
            // $loginClass->getUser();

            header("location:dashboard.php");
            exit;
        }
    }
}
