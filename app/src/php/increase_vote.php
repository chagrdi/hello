
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

  <!-- Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse container" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../../index.html">Accueil</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../../index2.html">La team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8888/arcade4/hello/app/src/php/increase_vote.php"><span class="sr-only">(current)</span>Voter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8888/arcade4/hello/app/src/php/commentaires.php">Avis</a>
                </li>
            </ul>
        </div>
    </nav>

<!-- Header -->
<header class="masthead d-flex" id="pagevotes">
    <div class="container text-center my-auto">
      <h1 class="mb-1">Il est temps de voter!</h1>
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="#liste">Faites le bon choix</a>
      <a href="../../index.html" id="retour-accueil">Retour à l'accueil</a>
    </div>
    <div class="overlay"></div>
  </header>


  <p id="liste"></p>
  <div class="container" id="titre-liste">
      <div class="content-section-heading text-center">
        <h3 class="text-secondary mb-0">Le classement</h3>
        <h2 class="mb-5">Votez pour votre jeu préféré!</h2>
      </div>
      <div class="row no-gutters">

  
  

  <?php
// Connect to database
require('connect.php');

// Request to to database (get nb_vote)
require('request.php');

/* Boucle pour tout les jeux */
while($vote = $q->fetch(PDO::FETCH_ASSOC)){
  /* on incrémente pour savoir qui a le plus de votes et le faire remonter dans le classement */
  $rang++;
  ?>
  <div class="container text-center my-auto">
    <div class="jeu">
    <p id="rang"><?= $rang ?></p>
    <p id="nomjeu"><?= $vote["slug_game"] ?></p>
    <p><?= $vote["nb_votes"] . ' ' ?>Votes</p>
    <?php echo "<a class='btn-vote' href='cookies.php?game=". $vote["slug_game"] . "'>Voter</a> <br>"; ?>
    </div>
    
  </div>
    
<?php } ?>




<!-- Footer -->
<footer class="footer text-center" id="footervote">
        <div class="container">
            <p class="text-muted small mb-0">Copyright &copy; Notre site 2019</p>
        </div>
</footer>








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





