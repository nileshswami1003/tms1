<?php

$server = "localhost";

$username = "root";

$password = "";

$database = "tmsdb";

$conn = mysqli_connect($server, $username, $password, $database);


if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}




?>
