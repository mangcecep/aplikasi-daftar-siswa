<?php

include("connection.php");
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$_SESSION["email"] = $email;
$_SESSION["password"] = $password;


if ($password == "" || $email == "") {
    $_SESSION["error"] = "All fields must be filled!";
    header("location: http://localhost:8000/login.php");
    die();
}

$sql = "SELECT * FROM users WHERE email='$email'";

$user =  mysqli_query($connections, $sql);

if ($user->num_rows == 0) {
    $_SESSION["error"] = "Email Not Registered!";
    header("location: http://localhost:8000/login.php");
    die();
}

$auth = $user->fetch_assoc();

if (password_verify($password, $auth['password'])) {
    $_SESSION['is_auth'] = true;
    $_SESSION['full_name'] = $auth['full_name'];
    $_SESSION['email'] = $auth['email'];
    header("Location: http://localhost:8000");
    die();
}

$_SESSION["error"] = "Wrong Password!";
header("location: http://localhost:8000/login.php");
die();