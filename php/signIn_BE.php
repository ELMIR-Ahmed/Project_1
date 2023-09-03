<?php
require_once "connexion_DB.php";
require_once "signIn.php";


if (!empty($_POST["username"]) && !empty($_POST["tel"]) && !empty($_POST["email"]) && !empty($_POST["pass"])) {
  $username = $_POST["username"];
  $tel = $_POST["tel"];
  $email = $_POST["email"];
  $pass = $_POST["pass"];

  $sql = "INSERT INTO users (username, phone_number, email, pass) VALUES (?, ?, ?, ?)";
  $request = $connexion->prepare($sql);
  $request->bindParam(1, $username, PDO::PARAM_STR);
  $request->bindParam(2, $tel, PDO::PARAM_STR);
  $request->bindParam(3, $email, PDO::PARAM_STR);
  $request->bindParam(4, $pass, PDO::PARAM_STR);
  $success = $request->execute();
  if ($success == 1) {
    session_start();
    $info = "SELECT * FROM users WHERE phone_number = ?";
    $reqInfo = $connexion -> prepare($info);
    $reqInfo -> bindValue(1, $tel, PDO::PARAM_STR);
    $reqInfo -> execute();
    $resultat = $reqInfo -> fetch();
    $_SESSION["id"] = $resultat["id_users"] ;
    $_SESSION["username"] = $resultat["username"] ;
    header('location:note_page.php');
  } else {
    header("location:signIn_BE.php");
  }
  
}



?>
