<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

$conn = new mysqli("localhost", "root", "", "book_db");

if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed"]));
}

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    $result = $conn->query("SELECT * FROM books");
    echo json_encode($result->fetch_all(MYSQLI_ASSOC));
} elseif ($method === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    $stmt = $conn->prepare("INSERT INTO books (title, author, description) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $data['title'], $data['author'], $data['description']);
    $stmt->execute();
    echo json_encode(["status" => "Book added"]);
}
$conn->close();
?>