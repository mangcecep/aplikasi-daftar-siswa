<?php
session_start();
include('connection.php');

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];

$full_name = htmlspecialchars($_POST['full_name']);
$email = htmlspecialchars($_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);


if ($full_name == '' || $email == '' || $_POST["password"] == '') {
    $_SESSION['error'] = "All fields me be filled!";
    $_SESSION['full_name'] = $full_name;
    $_SESSION['email'] = $email;

    header('location: http://localhost:8000/register.php');
    die();
}

$sql = "INSERT INTO users (full_name, password, email) VALUES ('$full_name',  '$password', '$email');";

if ($connections->query($sql)) {

    $_SESSION['message'] = "Register has been added successfully";
    header("location: http://localhost:8000/login.php");
    $connections->close();

    die();
}

echo "Error: " . $sql . "<br>" . $connections->error;
$connections->close();

// var_dump($_POST);
