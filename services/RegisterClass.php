<?php

namespace services;

include_once "FormAbstractClass.php";
include_once "RegisterClassInterface.php";
include_once "Database.php";

use services\Database;

class RegisterClass extends FormAbstractClass implements RegisterClassInterface
{
    public function save(
        $name,
        $email,
        $password
    ) {
        $password = password_hash($password, PASSWORD_ARGON2I);

        $form = [
            $email,
            $password
        ];

        $columns = [
            "email",
            "password",
        ];

        $db = new Database($columns, "users");

        $userTable = $db->store($form);

        if ($userTable) {
            $userRecord = $db->getRecord($email);

            if (count($userRecord) < 1) return false;

            $db = new Database(["user_id", "name"], "user_profiles");

            return $db->store([
                $userRecord["id"],
                $name
            ]);
        } else {
            return false;
        }
    }

    // public function validate()
    // {
    //     echo "this is an override method!";
    // }
}
