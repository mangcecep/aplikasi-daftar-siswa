<?php

include("connection.php");

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id=$id";

$student =  mysqli_query($connections, $sql);

$connections->close();
