<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

include "db.php";

$data = json_decode(file_get_contents("php://input"));

$name = $data->name;
$email = $data->email;
$password = password_hash($data->password,PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name,email,password)
VALUES ('$name','$email','$password')";

$conn->query($sql);

echo json_encode(["message"=>"User Registered"]);

?>