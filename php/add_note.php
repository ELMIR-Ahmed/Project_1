<?php
  require_once "connexion_DB.php";
  session_start();

  $id_user = $_SESSION["id"];
  $title = $_POST["title"];
  $context = $_POST["note_context"];
  $currentDate = date("Y-m-d");

  $sql = "INSERT INTO notes(title_note, context_note, date_note, id_users) values (?, ?, ?, ?)";

  $request = $connexion->prepare($sql);
  $request->bindValue(1, $title, PDO::PARAM_STR);
  $request->bindValue(2, $context, PDO::PARAM_STR);
  $request->bindValue(3, $currentDate, PDO::PARAM_STR);
  $request->bindValue(4, $id_user);
  $result = $request->execute();
  
  header("location:note_page.php");
?>