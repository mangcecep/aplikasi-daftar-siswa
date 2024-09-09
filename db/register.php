<?php

include("connection.php");
session_start();

$full_name = htmlspecialchars($_POST['full_name']);
$email = htmlspecialchars($_POST['email']);
// $password = md5(htmlspecialchars($_POST['password']));
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

if ($full_name == "" || $_POST['password'] == "" || $email == "") {
    $_SESSION["error"] = "All fields must be filled!";
    $_SESSION["full_name"] = $full_name;
    $_SESSION["email"] = $email;
    $_SESSION["error"] = "All fields must be filled!";
    header("location: http://localhost:8000/register.php");
    die();
}

$sql = "INSERT INTO users(full_name, password, email) VALUES ('$full_name', '$password', '$email');";

if ($connections->query($sql)) {
    $_SESSION['message'] = "Register has successfully! Login please!";

    header("location: http://localhost:8000/login.php");
    $connections->close();

    die();
}

echo "Error: " . $sql . "<br>" . $connections->error;
$connections->close();
