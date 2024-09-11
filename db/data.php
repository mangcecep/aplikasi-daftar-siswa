<?php
session_start();

if (isset($_SESSION['is_auth']) == false) {
    header("location: http://localhost:8000/login.php");
}

include("connection.php");

$students = [];

$sql = "SELECT * FROM students";

$students = mysqli_query($connections, $sql);

$connections->close();
