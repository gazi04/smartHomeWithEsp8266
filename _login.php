<?php
require "Database.php";
$db = new Database();
header('Content-Type: application/json');
if(isset($_POST["login"])){
  $username = $_POST["username"] ?? "";
  $password = $_POST["password"] ?? "";

  if(empty($username) || empty($password)){
    echo json_encode(["error" => "Username or password is empty"]);
    exit;
  }

  $db->query("CALL `login`(:username, :password)");
  $db->bind(":username", $username);
  $db->bind(":password", $password);
  $result = $db->single(); 

  if($result == false){
    echo json_encode(["error" => "Username or password are incorrect"]);
    exit;
  }

  session_start();
  $_SESSION["userid"] = $result["Id"];
  echo json_encode(["isLoggedIn" => true]);
  exit;
}
