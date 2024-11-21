<?php
session_start();

var_dump($_SESSION['is_login']);

session_unset();
session_destroy();

if (isset($_SESSION['is_login']) == false) {
    header("location: http://localhost:8000/login.php");
}

include("connection.php");

$students = [];

$sql = "SELECT * FROM students";

$students = mysqli_query($connections, $sql);

$connections->close();
