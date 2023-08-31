<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/new_note.css">
  <title>New Note</title>
</head>
<body>
  <div class="container">
    <div class="user">
      <div class="profil">
        <img src="../img/téléchargement (1).jpeg" alt="">
      </div>
      <h2><span class="UI">User :</span> <?php echo "Ahmed"; ?></h2>
      <br>
      <h2><span class="UI">ID :</span>  <?php echo "2003"; ?></h2>
    </div>
    <div class="note_form">
      <div class="note_title">
        <input type="text" placeholder="Title..." name="title">
      </div>
      <div class="note_context">
        <textarea name="note_context" placeholder="Write Your Note Here..."></textarea>
      </div>
      <div class="note_buttons">
        <a href="note_page.php">ADD</a>
      </div>
    </div>
  </div>
</body>
</html>