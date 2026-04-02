<?php

header("Access-Control-Allow-Origin: *");

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

?>