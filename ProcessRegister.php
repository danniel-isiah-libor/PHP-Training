<?php
include "services/RegisterClass.php";

use services\RegisterClass;

class ProcessRegister
{
    public $errors;

    public function __construct()
    {
        session_start();

        $this->errors = [
            "name" => "",
            "email" => "",
            "password" => "",
            "confirmPassword" => ""
        ];

        if (isset($_SESSION["isAuth"]) && $_SESSION["isAuth"]) {
            header("location:dashboard.php");
            exit;
        }
    }

    public function process()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $registerClass = new RegisterClass;

            $name = $registerClass->filter($_POST["name"]);
            $email = $registerClass->filter($_POST["email"]);
            $password = $registerClass->filter($_POST["password"]);
            $confirmPassword = $registerClass->filter($_POST["confirmPassword"]);

            $this->errors = $registerClass->validate(
                $name,
                $email,
                $password,
                $confirmPassword
            );

            if (count($this->errors) < 1) {
                $db = $registerClass->save(
                    $name,
                    $email,
                    $password
                );

                if ($db) {
                    header("location:login.php");
                    exit;
                }
            }
        }
    }
}
