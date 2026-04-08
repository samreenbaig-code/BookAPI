<?php

header("Access-Control-Allow-Origin: *");

include "db.php";

$id = $_GET['id'];

<<<<<<< HEAD
$sql = "DELETE FROM books WHERE id=$id";
=======
$sql = "DELETE FROM books WHERE id='$id'";
>>>>>>> 608be83 (Added PHP backend files for Book API)

$conn->query($sql);

echo json_encode(["message"=>"Deleted"]);

?>