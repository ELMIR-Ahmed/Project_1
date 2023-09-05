<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/new_note.css">
  <title>New Note</title>
</head>
<body>
  <?php
    require_once "./connexion_DB.php";
    session_start();
    // $id = $_SESSION["id"];
    $id_note = $_GET["curr_note"];
    $sql = "SELECT * FROM notes where id_note = :id";
    $requete = $connexion->prepare($sql);
    $requete->bindValue(":id", $id_note);
    $requete->execute();
    $data = $requete->fetch();
  ?>
  <div class="container">
    <div class="user">
      <div class="profil">
        <img src="../img/téléchargement (1).jpeg" alt="">
      </div>
      <h2><span class="UI">User :</span> <?php echo $_SESSION["username"] ;?></h2>
      <br>
      <h2><span class="UI">ID :</span>  <?php echo $_SESSION["id"] ;?></h2>
    </div>
    <div class="note_form">
      <form action="update_note_BE.php" method="post">
        <div class="note_title">
          <input type="text" placeholder="Title..." name="title" value="<?= $data["title_note"] ;?>">
        </div>
        <div class="note_context">
          <textarea name="note_context" placeholder="Write Your Note Here..."><?= $data["context_note"] ;?></textarea>
        </div>
        <div class="note_buttons">
          <button type="submit">Update</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>