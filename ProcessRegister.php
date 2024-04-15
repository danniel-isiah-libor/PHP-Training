<?php
include "services/RegisterClass.php";

use services\RegisterClass;

class ProcessRegister
{
    public $errors;

    public function __construct()
    {
        if (!isset($_SESSION)) session_start();

        $this->errors = [
            "avatar" => "",
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

            $avatar = $_FILES["avatar"];

            $fileSize = ($avatar["size"] / 1024) / 1024; // 10 mb
            $file = explode(".", $avatar["name"]);

            if ($fileSize > 10) {
                $this->errors["avatar"] = "Your file is too big!";
            } else if (!in_array($file[1], ["jpg", "png", "jpeg"])) {
                $this->errors["avatar"] = "Your file is invalid type!";
            }


            if (count($this->errors) < 1) {
                $filename = date("y-m-d-h-m-s") . "." . $file[1];
                $path = "uploads/$filename";

                move_uploaded_file($avatar["tmp_name"], $path);

                $db = $registerClass->save(
                    $path,
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
