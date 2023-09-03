<?php
  require_once "connexion_DB.php";

  $email = $_POST["email"];
  $pass = $_POST["pass"];
  $sql = "SELECT * FROM users where email = ? and pass = ?";

  $request = $connexion->prepare($sql);
  $request->bindValue(1, $email, PDO::PARAM_STR);
  $request->bindValue(2, $pass, PDO::PARAM_STR);
  $request->execute();
  $data = $request->fetch();
  // session_start();
  if(!empty($_POST["email"]) && !empty($_POST["pass"])){
    if ($email == $data["email"] && $pass == $data["pass"]) {
      session_start();
      $_SESSION["username"] = $data["username"];
      $_SESSION["id"] = $data["id_users"];
      header("location:note_page.php");
    } else {
      header("location:logIn.php");
    }
  }else {
    header("location:logIn.php"); 
  }
?>