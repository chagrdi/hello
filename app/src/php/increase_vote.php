
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

<ul class="list-group">
  <li class="list-group-item">
  <?php
// Connect to database
require('connect.php');

// Request to to database (get nb_vote)
require('request.php');

/* Boucle pour tout les jeux */
while($vote = $q->fetch(PDO::FETCH_ASSOC)){
    /* mettre le nombre position */
    $rang++;
    echo $rang;
    echo "<p class='p-vote'>" . $vote["slug_game"] . "</p>";
    echo $vote["nb_votes"] . " Votes" . '<br>';
    echo "<a class='btn-vote' href='cookies.php?game=". $vote["slug_game"] . "'>Voter</a> <br>";
} ?>
  </li>
</ul>


    <?php
// Connect to database
require('connect.php');

// Request to to database (get nb_vote)
require('request.php');

/* Boucle pour tout les jeux */
while($vote = $q->fetch(PDO::FETCH_ASSOC)){
    echo "<p class='p-vote'>" . $vote["slug_game"] . "</p>";
    echo $vote["nb_votes"] . " Votes" . '<br>';
    echo "<a class='btn-vote' href='cookies.php?game=". $vote["slug_game"] . "'>Voter</a> <br>";
}
?>



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





