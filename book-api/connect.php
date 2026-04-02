<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "book_manager";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

?>