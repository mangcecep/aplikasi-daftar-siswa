<?php

include("connection.php");


if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $age = $_POST['age'];
    $major = $_POST['major'];
    $keterangan = $_POST['keterangan'];

    $sql = "UPDATE students SET name='$name', class='$class', age='$age', major='$major', keterangan='$keterangan' WHERE id=$id";
    $sql = "UPDATE students SET name='$name', class='$class', age='$age', major='$major', keterangan='$keterangan' WHERE id=$id";

    if ($connections->query($sql)) {
        session_start();
        $_SESSION['updated'] = "Student has been updated successfully";
        header("location: http://localhost:8000");
        $connections->close();
    }

    die();
}

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id=$id";

$student =  mysqli_query($connections, $sql);

$connections->close();
