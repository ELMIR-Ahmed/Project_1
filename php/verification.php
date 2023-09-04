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

      $sql2 = "SELECT * FROM notes WHERE id_note = (SELECT MAX(id_note) FROM notes where id_users = ?);";
      $request2 = $connexion->prepare($sql2);
      $request2->bindValue(1, $_SESSION["id"]);
      $request2->execute();
      $data2 = $request2->fetch();
      $_SESSION["nbr_notes"] = $data2["id_note"];
      // echo $_SESSION["nbr_notes"];
      header("location:note_page.php");
    } else {
      header("location:logIn.php");
    }
  }else {
    header("location:logIn.php"); 
  }
?>