<?php
<<<<<<< HEAD

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
=======
include "db.php";

$data = json_decode(file_get_contents("php://input"));

$id = $data->id;
$title = $data->title;
$author = $data->author;
$description = $data->description;
>>>>>>> 608be83 (Added PHP backend files for Book API)

$sql = "UPDATE books
SET title='$title',author='$author',description='$description'
WHERE id=$id";

<<<<<<< HEAD
}

$conn->query($sql);

echo json_encode(["message"=>"Updated"]);

=======
$conn->query($sql);

echo json_encode(["message"=>"Updated"]);
>>>>>>> 608be83 (Added PHP backend files for Book API)
?>