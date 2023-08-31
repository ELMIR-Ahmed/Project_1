<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/all.min.css">
  <link rel="stylesheet" href="../css/signIn.css">
  <link rel="stylesheet" href="../css/home.css">
  <link rel="stylesheet" href="../css/logIn.css">
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
      <form action="../php/verification.php" method="post">
        <h2>Login Here</h2>
        <div class="icons">
          <i class="fa-solid fa-envelope fa-xs"></i>
          <input type="email" name="email" placeholder="E-mail">
        </div>
        <br>
        <br>
        <div class="icons">
          <i class="fa-solid fa-lock fa-xs"></i>
          <input placeholder="Password" type="password" name="pass">
        </div>
        <br>
        <br>
        <div class="buttons">
          <button  type="submit">Log in</button>
        </div>
      </form>
    </div>
  </div>
      
</body>
</html>
</body>
</html>