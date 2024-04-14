<?php

namespace services;

interface RegisterClassInterface // extends NewInterface
{
    /**
     * @param string $name
     * ......
     * @return array $errors
     */
    public function validate($name, $email, $password, $confirmPassword);

    /**
     * 
     */
    public function filter($input);
}
