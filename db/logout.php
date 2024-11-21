<?php
session_start();

$_SESSION['is_login'] = false;

session_unset();
session_destroy();


header("location: http://localhost:8000/login.php");
die();
