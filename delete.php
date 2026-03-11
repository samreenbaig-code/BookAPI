<?php

include 'connect.php';

$data = json_decode(file_get_contents("php://input"));

$id = $data->id;

$sql = "DELETE FROM books WHERE id = $id";

if ($conn->query($sql)) {
    echo json_encode(["message" => "Book deleted"]);
} else {
    echo json_encode(["error" => $conn->error]);
}

$conn->close();

?>