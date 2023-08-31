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
    session_start();
    
  ?>
  <div class="container">
    <div class="card_id">
      <div class="user">
        <img src="../img/téléchargement (1).jpeg" alt="NOT FOUND" class="circle">
        <div class="name_id">
          <h2><span class="UI">User :</span> <?php echo "Ahmed"; ?></h2>
          <br>
          <h2><span class="UI">ID :</span>  <?php echo "2003"; ?></h2>
        </div>
      </div>
      <div class="add_note">
        <a href="new_note.php">New Note</a>
      </div>
    </div>
    <div class="notes">
      <div class="article_n">
        <div class="note_card">
          <h2>Title : <?php echo "PHP";?> <span class="date"><?php echo "2003-12-09";?></span></h2>
          <a href="delete_note.php">Delete</a>
        </div>
        <div class="note_card">
          <h2>Title : <?php echo "PHP";?> <span class="date"><?php echo "2003-12-09";?></span></h2>
          <a href="delete_note.php">Delete</a>
        </div>
        <div class="note_card">
          <h2>Title : <?php echo "PHP";?> <span class="date"><?php echo "2003-12-09";?></span></h2>
          <a href="delete_note.php">Delete</a>
        </div>
        <div class="note_card">
          <h2>Title : <?php echo "PHP";?> <span class="date"><?php echo "2003-12-09";?></span></h2>
          <a href="delete_note.php">Delete</a>
        </div>
        <div class="see_more">
          <a href="see_more.php">See More...</a>
        </div>
      </div>
      <div class="body_n">
        <div class="note">
          <h2><?php echo "PHP";?></h2>
          <div class="container_p">
            <p>
              <?php echo "";?>
            </p>
          </div>
          <div class="buttons_note">
            <a href="update.php">Update</a>
            <a href="delete.php">Delete</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>