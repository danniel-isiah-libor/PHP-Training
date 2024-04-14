<?php

namespace services;

class Database
{
    const DB_NAME = "mydb";

    public function __construct()
    {
        echo "<br> Welcome to Database Class <br>";
    }

    public function store()
    {
        echo self::DB_NAME . "<br>";
    }

    public function __destruct()
    {
        echo "<br> Goodbye from Database Class <br>";
    }
}
