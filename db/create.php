<?php

include("connection.php");

$name = htmlspecialchars($_POST['name']);
$class = htmlspecialchars($_POST['class']);
$age = htmlspecialchars($_POST['age']);
$major = htmlspecialchars($_POST['major']);
$keterangan = htmlspecialchars($_POST['keterangan']);

$sql = "INSERT INTO students(name, class, age, major, keterangan) VALUES ('$name', '$class', $age, '$major', '$keterangan');";

if ($connections->query($sql)) {


    $_SESSION['message'] = "Student has been created successfully!";

    header("location: http://localhost:8000/");
    $connections->close();

    die();
}

echo "Error: " . $sql . "<br>" . $connections->error;
$connections->close();
