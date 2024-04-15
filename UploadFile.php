<?php


$file = $_FILES["file"];

// if((($file["size"] / 1024) / 1024)  < 5) {

// }

// var_dump($file);

$filename = explode('.', $file["name"]);

$filename = date('y-m-d-h-i-s') . "." . $filename[1];

$directory = "uploads/" . $filename;

move_uploaded_file($file["tmp_name"], $directory);
