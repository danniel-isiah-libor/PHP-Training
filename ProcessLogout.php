<?php

if (!isset($_SESSION)) session_start();

$_SESSION = [];

header("location:login.php");
exit;
