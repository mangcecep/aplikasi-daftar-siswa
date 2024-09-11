<?php

$server = 'localhost';
$username = 'root';
$password = 'Awaslupa1234';
$db_name = 'daftar_siswa';

$connections = new mysqli($server, $username, $password, $db_name);

if ($connections->connect_error) {
    die("Connection FAILED: " . $$connections->connect_error);
}

// echo "Connections Success";
