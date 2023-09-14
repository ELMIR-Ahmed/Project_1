<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/note_page.css">
  <title>Note | page</title>
</head>
<body>
  <?php
    require_once "./connexion_DB.php";
    session_start();
    $username = $_SESSION["username"];
    $id = $_SESSION["id"];
    $limit = isset($_GET['limit']) ? (int) $_GET['limit'] : 4;
    $nextLimit = $limit + 4;

    // $note_limit = 4;

    $sql = "SELECT * FROM notes WHERE id_users = ? ORDER BY id_note DESC LIMIT $limit";
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
          <h2 onclick="location.href='../php/note_page.php?aff_note=<?=$result['id_note'];?>'" class="click_note">
            Title : <?php echo $result["title_note"];?> 
            <span class="date">
              <?php echo $result["date_note"];?>
            </span>
          </h2>
          <a onclick="location.href='../php/delete.php?this_note=<?=$result['id_note'];?>'">Delete</a>
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
          <a href="note_page.php?limit=<?= $nextLimit; ?>">See More...</a>
        </div>
      </div>
      <div class="body_n">
        <div class="note">
          <?php
            $note_aff = $_GET["aff_note"];
            $request_aff = "SELECT id_note, title_note, context_note FROM notes WHERE id_note = ?";
            $stmt = $connexion->prepare($request_aff);
            $stmt->bindValue(1, $note_aff);
            $stmt->execute();
            $data_note = $stmt->fetch();
          ?>
          <?php 
            $title = $data_note ? $data_note['title_note'] : 'no title';
            $content = $data_note ? $data_note['context_note'] : 'no content';
            $noteId = $data_note ? $data_note['id_note'] : -1;
          ?>
          <h2><?= $title; ?></h2>
          <div class="container_p">
            <textarea disabled class="note_text" ><?=$content;?></textarea>
          </div>
          <div class="buttons_note">
            <a href="update_note.php?curr_note=<?= $data_note["id_note"] ;?>">Update</a>
            <a onclick="location.href='../php/delete.php?this_note=<?= $result['id_note'] ;?>'">Delete</a> <!-- a corriger !!! -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="../js/note_page.js"></script>
</body>
</html>