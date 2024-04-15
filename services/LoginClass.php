<?php

namespace services;

include "services/FormAbstractClass.php";
include "services/Database.php";

use services\Database;

class LoginClass extends FormAbstractClass
{
    private $email = null;
    private $password = null;

    // const ADMIN_EMAIL = "admin@mail.test";

    public function __construct($email, $password)
    {
        $this->email = $this->filter($email);
        $this->password = $this->filter($password);
    }

    public function authenticate()
    {
        $db = new Database([], "users");

        $result = $db->getRecord($this->email);

        $emailResult = $result["email"] ?? "";
        $passwordResult = $result["password"] ?? "";
        $userId = $result["id"] ?? "";

        if (
            $emailResult == $this->email &&
            password_verify($this->password, $passwordResult)
        ) {
            $_SESSION["isAuth"] = true;
            $_SESSION["userId"] = $userId;
            $_SESSION["email"] = $emailResult;

            return true;
        } else {
            return false;
        }
    }

    // public static function getUser()
    // {
    //     return self::ADMIN_EMAIL;
    // }
}
