
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hello</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
  <link rel="stylesheet" href="../../dist/assets/css/style.css">
  <!-- bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../js/script.js">
</head>

<body>

<!-- Header -->
<header class="masthead d-flex" id="avis">
    <div class="container text-center my-auto">
      <h1 class="mb-1">Laissez votre avis!</h1>
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="#liste">Nous serons content de vous lire</a>
      <a href="../../index.html" id="retour-accueil">Retour à l'accueil</a>
    </div>
    <div class="overlay"></div>
  </header>


  <p id="liste"></p>
  <div class="container" id="titre-liste">
      <div class="content-section-heading text-center">
        <h3 class="text-secondary mb-0">Espace commentaire</h3>
        <h2 class="mb-5">Laissez votre avis</h2>
      </div>
      <div class="row no-gutters">


<?php
// Connect to database
require('connect.php');

?>

     <!-- jeu 3 -->
     <form action="comments.php" method="post">
         <p>Vote</p>
        <select name="id_game">
            <option value="1">jeu 1</option>
            <option value="4">jeu 2</option>
            <option value="5">jeu 3</option>
        </select>
        <p>Pseudo</p>
        <input type="text" name="pseudo">
        <p>Commentaire</p>
        <textarea type="text" name="commentaire"></textarea><br>
        <input type="submit" value="ENVOYER">
    </form>
    <!-- jeu 3 -->






  <!-- du js -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>





