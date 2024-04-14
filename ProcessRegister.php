<?php
include "services/RegisterClass.php";

use services\RegisterClass;

class ProcessRegister
{
    public $errors;

    public function __construct()
    {
        $this->errors = [
            "name" => "",
            "email" => "",
            "password" => "",
            "confirmPassword" => ""
        ];
    }

    public function process()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $registerClass = new RegisterClass;
        }
    }
}
