<?php
  require_once "../php/connexion_DB.php";
  session_start();
  $id_note = $_GET["this_note"];

  $request = "DELETE FROM notes WHERE id_note = ?";
  $stmt = $connexion->prepare($request);
  $stmt->bindValue(1, $id_note);
  $stmt->execute();
  header("location:note_page.php");
?>