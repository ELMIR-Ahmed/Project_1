<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Orbitron:wght@900&family=Poppins:wght@500&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
  <title>Home | Page</title>
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
  <div class="welcome">
    <h1>WELCOME TO OUR WEBSITE</h1>
  </div>
  <div class="features">
    <div class="big_title_1">
      <h1>Website Features</h1>
      <p>Note4u</p>
    </div>
    <div class="features_cards">
      <div class="card_body">
        <div class="card_text">
          <div class="card_title">
            <h2>Organisation Personnalisée</h2>
          </div>
          <p>
            Permettez aux utilisateurs de créer des catégories, des dossiers ou des étiquettes pour organiser leurs notes de manière efficace. Ils devraient pouvoir classer et retrouver leurs notes facilement, que ce soit par date, par sujet ou par toute autre méthode de tri qu'ils préfèrent.
          </p>
        </div>
      </div>
      <div class="card_body">
        <div class="card_text">
          <div class="card_title">
            <h2>Protection de la Vie Privée</h2>
          </div>
          <p>
            Ajoutez des options de sécurité telles que le verrouillage par mot de passe, l'authentification à deux facteurs ou même le chiffrement de bout en bout pour assurer la confidentialité des notes sensibles des utilisateurs.
          </p>
        </div>
      </div>
      <div class="card_body">
        <div class="card_text">
          <div class="card_title">
            <h2>Statistiques d'Utilisation</h2>
          </div>
          <p>
            Intégrez une fonctionnalité qui offre aux utilisateurs des informations sur leurs habitudes de prise de notes, comme le nombre de notes créées, le temps passé sur chaque note, etc. Cela pourrait les aider à mieux gérer leur productivité et leurs priorités.
          </p>
        </div>
      </div>
      <div class="card_body">
        <div class="card_text">
          <div class="card_title">
            <h2>Exportation et Impression Personnalisées</h2>
          </div>
          <p>
            Offrez aux utilisateurs la possibilité d'exporter leurs notes dans différents formats tels que PDF, texte brut ou même des formats compatibles avec des applications spécifiques. Assurez-vous que les formats d'exportation conservent la mise en forme et l'organisation des notes.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="about_us">
    <div class="big_title_2">
      <h1>About Us</h1>
      <p>Note4u</p>
    </div>
    <div class="content_au">
      <div class="img_au">
        <img src="../img/téléchargement.jpeg" alt="">
      </div>
      <div class="text_au">
        <h1>Our Story</h1>
        <p>
          The history of <b>Note4u</b> began with a fascination for how something as simple as a block of bound pages could evolve into the guardian of thoughts, ideas, and inspirations. We are a team of enthusiasts who firmly believe in the power of handwriting in an increasingly digital world.
        </p>
        <h1>Our Mission</h1>
        <p>
          Our mission is to provide a platform where notepad enthusiasts, whether they are beginners or experts, can find valuable information, practical advice, and resources to fully harness their creative potential. We believe that every blank page represents an opportunity to unleash imagination, outline plans, capture memories, and foster reflection.
        </p>
      </div>
    </div>
  </div>
  <div class="contact_us">
    <div class="big_title_1">
      <h1>Contact Us</h1>
      <p>Note4u</p>
    </div>
    <div class="contact_context">
      <div class="contact_info">
        <h1>Location</h1>
        <p>30 rue ANNASR lot Machaeallah num° 19</p>
        <h1>Follow Us</h1>
        <div class="lien">
          <a href="www.facebook.com"><i class="fa-brands fa-facebook fa-xl"></i></a>
          <a href="www.instagram.com"><i class="fa-brands fa-instagram fa-xl"></i></a>
          <a href="www.twitter.com"><i class="fa-brands fa-twitter fa-xl"></i></a>
          <a href="www.email.com"><i class="fa-solid fa-envelope fa-xl"></i></a>
        </div>
      </div>
      <div class="contact_form">
        <form>
          <h1>Contact Form</h1>
          <input type="text" placeholder="Enter your Name" size="64px">
          <br>
          <br>
          <input type="email" placeholder="Enter a valid email adress" size="64px">
          <br>
          <br>
          <textarea name="" id="" cols="60" rows="7" placeholder="Enter your message"></textarea>
          <br>
          <input type="submit" value="submit">
        </form>
      </div>
    </div>
  </div>
</body>
</html>