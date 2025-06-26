<?php

// $server = "localhost";
// $username = "root";
// $password = "";
// $db = "login";

// $conn = new mysqli($server, $username, $password, $db);

$server = "127.0.0.1";     // Use 127.0.0.1 instead of 'localhost' to avoid socket issues
$username = "root";
$password = "";
$db = "login";
$port = 3307;              // This is critical when MySQL runs on a non-default port

$conn = new mysqli($server, $username, $password, $db, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>