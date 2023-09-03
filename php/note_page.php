<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/note_page.css">
  <title>Note | page</title>
</head>
<body style="background-color: gray;">
  <?php
    require_once "./connexion_DB.php";
    session_start();
    $username = $_SESSION["username"];
    $id = $_SESSION["id"];

    $sql = "SELECT * FROM notes WHERE id_users = ? order by id_note desc";
    $request = $connexion->prepare($sql);
    $request->bindValue(1, $id);
    $request->execute();
    $results = $request->fetchAll();
  ?>
  <div class="container">
    <div class="card_id">
      <div class="user">
        <img src="../img/téléchargement (1).jpeg" alt="NOT FOUND" class="circle">
        <div class="name_id">
          <h2><span class="UI">User :</span> <?php echo $username; ?></h2>
          <br>
          <h2><span class="UI">ID :</span>  <?php echo $id; ?></h2>
        </div>
      </div>
      <div class="add_note">
        <a href="new_note.php">New Note</a>
      </div>
    </div>
    <div class="notes">
      <div class="article_n">
        <?php foreach ($results as $result) :?>
        <div class="note_card">
          <h2 onclick="location.href='../php/afficher_note.php'" class="click_note">
            Title : <?php echo $result["title_note"];?> 
            <span class="date">
              <?php echo $result["date_note"];?>
            </span>
          </h2>
          <a onclick="this.parentElement.remove()">Delete</a>
        </div>
        <!-- <div class="note_card">
          <h2>Title : </span></h2>
          <a href="delete_note.php">Delete</a>
        </div>
        <div class="note_card">
          <h2>Title : </span></h2>
          <a href="delete_note.php">Delete</a>
        </div>
        <div class="note_card">
          <h2>Title : </span></h2>
          <a href="delete_note.php">Delete</a>
        </div> -->
        <?php endforeach; ?>
        <div class="see_more">
          <a href="see_more.php">See More...</a>
        </div>
      </div>
      <div class="body_n">
        <div class="note">
          <h2><?php echo "PHP";?></h2>
          <div class="container_p">
            <textarea disabled class="note_text" ><?php echo "testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest";?></textarea>
          </div>
          <div class="buttons_note">
            <a href="update.php">Update</a>
            <a href="delete.php">Delete</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="../js/note_page.js"></script>
</body>
</html>