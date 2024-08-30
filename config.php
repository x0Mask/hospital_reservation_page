<?php
$dsn = "localhost";
$user = "root";
$password = "";
$db = "hospital";

$conn = mysqli_connect($dsn, $user, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set charset to utf8 to handle special characters
mysqli_set_charset($conn, "utf8");
