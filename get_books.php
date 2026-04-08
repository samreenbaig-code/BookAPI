<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

include "db.php";

$sql = "SELECT * FROM books";
<<<<<<< HEAD
$result = $conn->query($sql);

$data = [];

while($row = $result->fetch_assoc()){
$data[] = $row;
}

echo json_encode($data);
=======

$result = $conn->query($sql);

$books = [];

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $books[] = $row;
    }
}

echo json_encode($books);
>>>>>>> 608be83 (Added PHP backend files for Book API)

?>