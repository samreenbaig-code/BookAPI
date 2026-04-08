<?php

header("Access-Control-Allow-Origin: *");
<<<<<<< HEAD

include "db.php";

$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];

$imageName = $_FILES['image']['name'];
$temp = $_FILES['image']['tmp_name'];

move_uploaded_file($temp,"uploads/".$imageName);

$sql = "INSERT INTO books(title,author,description,image)
VALUES('$title','$author','$description','$imageName')";

$conn->query($sql);

echo json_encode(["message"=>"Book Added"]);
=======
header("Access-Control-Allow-Headers: *");

include "db.php";

$data = json_decode(file_get_contents("php://input"));

$title = $data->title;
$author = $data->author;
$description = $data->description;

$sql = "INSERT INTO books (title, author, description)
VALUES ('$title','$author','$description')";

$conn->query($sql);

echo json_encode(["message"=>"Book added"]);
>>>>>>> 608be83 (Added PHP backend files for Book API)

?>