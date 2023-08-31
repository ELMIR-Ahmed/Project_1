<?php
session_start();
require_once "connexion_DB.php";
require_once "signIn.php";

if (!empty($_POST["id"]) && !empty($_POST["username"]) && !empty($_POST["tel"]) && !empty($_POST["email"]) && !empty($_POST["pass"])) {
  $id_users = $_POST["id"];
  $username = $_POST["username"];
  $tel = $_POST["tel"];
  $email = $_POST["email"];
  $pass = $_POST["pass"];

  $sql = "INSERT INTO users (id_users, username, phone_number, email, pass) VALUES (? ,?, ?, ?, ?)";
  $request = $connexion->prepare($sql);
  $request->bindParam(1, $id_users, PDO::PARAM_INT);
  $request->bindParam(2, $username, PDO::PARAM_STR);
  $request->bindParam(3, $tel, PDO::PARAM_STR);
  $request->bindParam(4, $email, PDO::PARAM_STR);
  $request->bindParam(5, $pass, PDO::PARAM_STR);
  $request->execute();

  session_start();

  header('location:note_page.php');
}



?>
