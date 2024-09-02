<?php

include('connection.php');

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id=$id";

if ($connections->query($sql)) {
    header("location: http://localhost/aplikasi-daftar-siswa/");
    $connections->close();

    die();
}
