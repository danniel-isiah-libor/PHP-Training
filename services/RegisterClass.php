<?php

namespace services;

include_once "FormAbstractClass.php";
include_once "RegisterClassInterface.php";

class RegisterClass extends FormAbstractClass implements RegisterClassInterface
{
    protected function save()
    {
        echo "saving in progress...";
    }

    // public function validate()
    // {
    //     echo "this is an override method!";
    // }
}
