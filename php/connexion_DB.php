<?php
  define("dbhost", "localhost");
  define("user", "root");
  define("dbname", "note4u");
  define("pass", "@hmed2003");

  $dsn = "mysql:host=".dbhost.";dbname=".dbname;
  $user = "root";
  $pass = "@hmed2003";
  $db_file = "../sql/note4u_db.sql";
  try {
    $connexion = new PDO($dsn, $user, $pass);
    $sqlContent = file_get_contents($db_file);
    $connexion->exec($sqlContent);
    // echo 'Fichier SQL exécuté avec succès';
  } catch (PDOException $e) {
    echo 'Erreur => ' . $e->getMessage();  
  }
?>