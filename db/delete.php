<?php

include('connection.php');

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id=$id";

if ($connections->query($sql)) {
    session_start();
    $_SESSION['deleted'] = "Student has been deleted successfully";
    header("location: http://localhost:8000");
    $connections->close();

    die();
}
