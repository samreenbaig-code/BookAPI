<?php

<<<<<<< HEAD
$conn = new mysqli("localhost","root","","book_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
=======
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$host = "localhost";
$user = "root";
$password = "";
$database = "book_db";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
>>>>>>> 608be83 (Added PHP backend files for Book API)
}

?>