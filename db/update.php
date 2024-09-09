<?php

include("connection.php");


if (isset($_POST['id'])) {
    $name = $_POST['name'];
    $class = $_POST['class'];
    $age = $_POST['age'];
    $major = $_POST['major'];
    $keterangan = $_POST['keterangan'];

    $sql = "UPDATE students SET name='$name', class='$class', age='$age', major='$major', keterangan='$keterangan'";

    if ($connections->query($sql)) {
        header("location: http://localhost/aplikasi-daftar-siswa/");
        $connections->close();
    }

    die();
}

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id=$id";

$student =  mysqli_query($connections, $sql);

$connections->close();
