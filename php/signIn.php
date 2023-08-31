<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/all.min.css">
  <link rel="stylesheet" href="../css/signIn.css">
  <link rel="stylesheet" href="../css/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Sign In</title>
</head>
<body>
<nav class="navbar">
    <div class="contextnav">
      <div class="logo">
        <div class="book">
          <a href="../php/home.php"><i class="fa-solid fa-book"></i></a>
          
        </div>
        <a href="../php/home.php">Note4u</a>
      </div>
      <ul class="items">
        <li><a href="../php/logIn.php">Log In</a></li>
        <li><a href="../php/signIn_BE.php">Sign In</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="form">
      <form action="../php/signIn_BE.php" method="post">
        <h2>New Account ?</h2>
        <div class="icons">
          <i class="fa-solid fa-user fa-xs"></i>
          <input required placeholder="Your Id" type="text" name="id">
        </div>
        <br>
        <br>
        <div class="icons">
          <i class="fa-solid fa-user fa-xs"></i>
          <input required placeholder="Username" type="text" name="username">
        </div>
        <br>
        <br>
        <div class="icons">
          <i class="fa-solid fa-phone fa-xs"></i>
          <input required placeholder="Number Phone" type="tel" name="tel">
        </div>
        <br>
        <br>
        <div class="icons">
          <i class="fas fa-envelope fa-xs"></i>
          <input required placeholder="E-mail" type="email" name="email">
        </div>
        <br>
        <br>
        <div class="icons">
          <i class="fa-solid fa-lock fa-xs"></i>
          <input required type="password" name="pass" placeholder="Password">
        </div>
        <br>
        <br>
        <div class="icons">
          <i class="fa-solid fa-unlock-keyhole fa-xs"></i>
          <input required placeholder="Confirm Password" type="password" name="cnfpass">
        </div>
        <br>
        <br>
        <div class="buttons">
          <button  type="submit">Valider</button>
          <button type="reset">annuler</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>