<?php

// $attendanceFile = fopen("attendance.txt", "r");

// // to read a file
// // $content = fread($attendanceFile, filesize("attendance.txt"));

// // to write a file
// $employees = fopen("employees.txt", "x+");

// fwrite($employees, "HELLO FROM EMPLOYEES FILE");

// $employees = fopen("employees.txt", "r");

// $content = fread($employees, filesize("employees.txt"));

// var_dump($content);

$sales = fopen("sales.csv", "r");

$contents = fread($sales, filesize("sales.csv"));

$contents = explode(',', $contents);

var_dump($contents);
