<?php

include 'connect.php';

$data = json_decode(file_get_contents("php://input"));

$title = $data->title;
$author = $data->author;
$description = $data->description;

$sql = "INSERT INTO books (title, author, description)
VALUES ('$title','$author','$description')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["message"=>"Book added"]);
} else {
    echo json_encode(["error"=>$conn->error]);
}

$conn->close();

?>