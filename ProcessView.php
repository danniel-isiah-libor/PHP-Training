<?php

use services\Database;

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];

    $db = new Database([], "posts");

    $post = $db->show($id);
}
