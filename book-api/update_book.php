<?php

header("Access-Control-Allow-Origin: *");

include "db.php";

$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];

if(isset($_FILES['image'])){

$image = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

move_uploaded_file($tmp,"uploads/".$image);

$sql = "UPDATE books
SET title='$title',author='$author',description='$description',image='$image'
WHERE id=$id";

}else{

$sql = "UPDATE books
SET title='$title',author='$author',description='$description'
WHERE id=$id";

}

$conn->query($sql);

echo json_encode(["message"=>"Updated"]);

?>