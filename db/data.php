<?php

include("connection.php");

$students = [];

$sql = "SELECT * FROM students";

$students = mysqli_query($connections, $sql);

$connections->close();
