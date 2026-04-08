<?php
include "db.php";

$data = json_decode(file_get_contents("php://input"));

$email = $data->email;
$password = $data->password;

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

$user = $result->fetch_assoc();

if(password_verify($password,$user['password'])){
echo json_encode(["success"=>true]);
}else{
echo json_encode(["success"=>false]);
}

?>