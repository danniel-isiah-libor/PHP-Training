<?php

namespace services;

use mysqli;

class Database
{
    const DB_SERVER = "localhost";
    const DB_USER = "root";
    const DB_PASSWORD = "";
    const DB_NAME = "blog";

    public $mysql, $columns, $table;

    public function __construct($columns = [], $table = "")
    {
        $this->columns = $columns;
        $this->table = $table;

        $this->mysql = new mysqli(
            self::DB_SERVER,
            self::DB_USER,
            self::DB_PASSWORD,
            self::DB_NAME
        );

        if ($this->mysql->connect_error) {
            die("Connection failed: " . $this->mysql->connect_error);
        }
    }

    public function store($form)
    {
        $createdAt = date("y-m-d h:m:s");
        $updatedAt = date("y-m-d h:m:s");

        // $query = "
        // INSERT INTO users (email, password, created_at, updated_at)
        // VALUES ('$email', '$password', '$createdAt', '$updatedAt')
        // ";

        $table = $this->table;

        $query = "INSERT INTO $table (";

        for ($i = 0; $i < count($this->columns); $i++) {
            $query .= $this->columns[$i] . ",";
        }

        $query .= "created_at, updated_at) VALUES (";

        for ($i = 0; $i < count($form); $i++) {
            if (count($form) - 1 == $i) {
                $query .= "'$form[$i]'";
            } else {
                $query .= "'$form[$i]', ";
            }
        }

        $query .= ", '$createdAt', '$updatedAt')";

        if (!$this->mysql->query($query)) {
            die("Data saved unsuccessfully!");
        }

        return true;
    }

    public function getRecord($email)
    {
        $table = $this->table;

        $query = "SELECT * FROM $table WHERE email = '$email' LIMIT 1";

        $result = $this->mysql->query($query);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return [];
        }

        // foreach ($result->fetch_assoc() as $row) {
        //     var_dump($row);
        //     echo "<br>";
        // }

        // echo "<br>";

        // var_dump($result->num_rows);

        // echo "<br>";

        // while ($row = $result->fetch_assoc()) {
        //     // var_dump($row);
        //     echo $row["email"];
        // }
    }

    public function getRecords()
    {
        $table = $this->table;

        $query = "
            SELECT posts.id, posts.title, posts.body, users.email FROM $table 
            LEFT JOIN users ON posts.user_id = users.id
            ORDER BY posts.updated_at DESC
        ";

        $result = $this->mysql->query($query);

        if ($result->num_rows > 0) {
            $records = [];

            while ($row = $result->fetch_assoc()) {
                $records[] = $row;
                // array_push($records, $row);
            }

            return $records;
        } else {
            return [];
        }
    }

    public function show($id)
    {
        $table = $this->table;

        $query = "
            SELECT 
                posts.id,
                posts.user_id,
                posts.title,
                posts.body,
                posts.updated_at,
                users.email 
            FROM $table
            LEFT JOIN users ON posts.user_id = users.id
            WHERE posts.id = $id LIMIT 1
        ";

        $result = $this->mysql->query($query);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return [];
        }
    }

    public function delete($id)
    {
        $table = $this->table;

        $query = "DELETE FROM $table WHERE id = $id";

        $result = $this->mysql->query($query);

        var_dump($result);
    }

    public function update($title, $body, $id)
    {
        $table = $this->table;

        $updatedAt = date("y-m-d h:m:s");

        $query = "UPDATE $table SET title='$title', body='$body', updated_at='$updatedAt' WHERE id = $id";

        if (!$this->mysql->query($query)) {
            die("Data saved unsuccessfully!");
        }

        return true;
    }

    public function getUserProfile($id)
    {
        $table = $this->table;

        $query = "SELECT * FROM $table WHERE user_id = $id LIMIT 1";

        $result = $this->mysql->query($query);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return [];
        }
    }

    public function __destruct()
    {
        $this->mysql->close();
    }
}
