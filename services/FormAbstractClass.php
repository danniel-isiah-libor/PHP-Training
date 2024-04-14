<?php

namespace services;

abstract class FormAbstractClass
{
    /**
     * Validate form submission.
     */
    public function validate(
        $name,
        $email,
        $password,
        $confirmPassword
    ) {
        $errors = [];

        // Check if inputs are empty
        if (empty($name)) $errors["name"] = "Name is required"; // echo "Name is required";
        if (empty($email)) $errors["email"] = "Email is required"; // echo "Email is required";
        if (empty($password)) $errors["password"] = "Password is required"; // echo "Password is required";
        if (empty($confirmPassword)) $errors["confirmPassword"] = "Confirm Password is required"; // echo "Confirm Password is required";

        // Check custom rules
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors["email"] = "Must be valid email"; // echo "Must be valid email";

        if ($password != $confirmPassword) $errors["confirmPassword"] = "Password doesn't match"; // echo "Password doesn't match";

        if (strlen($password) < 8) {
            $errors["password"] = "Minimum of 8 characters"; // echo "Minimum of 8 characters";
        } else if (strlen($password) > 12) {
            $errors["password"] = "Maximum of 12 characters"; // echo "Maximum of 12 characters";
        } else if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z]).+$/', $password)) {
            $errors["password"] = "At least 1 upper case and 1 lower case"; // echo "At least 1 upper case and 1 lower case";
        }

        return $errors;
    }

    /**
     * Filter the input
     * @param string $input
     * @return string
     */
    public function filter($input)
    {
        $input = htmlspecialchars($input);
        $input = stripslashes($input);
        $input = trim($input);
        return $input;
    }
}
