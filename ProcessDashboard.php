<?php

include "services/Database.php";

use services\Database;

class ProcessDashboard
{
    public $records = [];

    public function __construct()
    {
        if (!isset($_SESSION)) session_start();

        if (!isset($_SESSION["isAuth"]) && !$_SESSION["isAuth"]) {
            header("location:login.php");
            exit;
        }
    }

    public function process()
    {
        $db = new Database([], "posts");

        $this->records = $db->getRecords();
    }
}
