<?php

include_once "services/Database.php";

use services\Database;

if (!isset($_SESSION)) session_start();

$id = $_POST["id"];

$db = new Database([], "posts");

$post = $db->show($id);

if ($_SESSION["userId"] != $post["user_id"]) {
    header("location: http://sample.test");
    exit;
}

$db = new Database([], "posts");

$db->delete($id);

header("location: http://sample.test");
exit;
