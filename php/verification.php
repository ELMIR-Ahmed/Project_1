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

      // $sql2 = "SELECT * FROM notes WHERE id_note = (SELECT MAX(id_note) FROM notes where id_users = ?);";
      // $request2 = $connexion->prepare($sql2);
      // $request2->bindValue(1, $_SESSION["id"]);
      // $request2->execute();
      // $data2 = $request2->fetch();
      // $_SESSION["max_note"] = $data2["id_note"];

      // $sql3 = "SELECT * FROM notes WHERE id_note = (SELECT MIN(id_note) FROM notes where id_users = ?);";
      // $request3 = $connexion->prepare($sql3);
      // $request3->bindValue(1, $_SESSION["id"]);
      // $request3->execute();
      // $data3 = $request3->fetch();
      // $_SESSION["min_note"] = $data3["id_note"];
      // echo $_SESSION["min_note"];
      // echo "<br>";
      // echo $_SESSION["max_note"];
      header("location:note_page.php");
    } else {
      header("location:logIn.php");
    }
  }else {
    header("location:logIn.php"); 
  }
?>