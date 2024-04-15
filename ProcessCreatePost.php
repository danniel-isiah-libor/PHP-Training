<?php

use services\Database;

class ProcessCreatePost
{
    public $errors;

    public function __construct()
    {
        if (!isset($_SESSION)) session_start();

        $this->errors = [];
    }

    public function process()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            /**
             * 1. sanitize
             *          - remove script
             *          - remove slashes
             *          - remove excess white spaces
             * 2. validate
             *          - check for empty fields
             *          - check for character length
             * 3. saving
             */
            $title = $_POST["title"];
            $body = $_POST["body"];

            $title = htmlspecialchars($title);
            $body = htmlspecialchars($body);

            $title = stripslashes($title);
            $body = stripslashes($body);

            $title = trim($title);
            $body = trim($body);

            if (empty($title)) {
                $this->errors["title"] = "Title is required";
            } else if (strlen($title) > 50) {
                $this->errors["title"] = "Maximum of 50 characters only";
            }

            if (empty($body)) {
                $this->errors["body"] = "Body is required";
            } else if (strlen($body) > 400) {
                $this->errors["body"] = "Maximum of 400 characters only";
            }

            if (count($this->errors) < 1) {
                $db = new Database(["user_id", "title", "body"], "posts");

                $result = $db->store([$_SESSION["userId"], $title, $body]);

                if ($result) {
                    header("location:index.php");
                    exit();
                }
            }
        }
    }
}
