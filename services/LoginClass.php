<?php

namespace services;

include "services/FormAbstractClass.php";

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
        $this->email;
        $this->password;

        $_SESSION["isAuth"] = true;
    }

    // public static function getUser()
    // {
    //     return self::ADMIN_EMAIL;
    // }
}
