<?php
// Connect to database
require('connect.php');

// Request to to database (get nb_vote)
require('request.php');

/* Boucle pour tout les jeux */
while($vote = $q->fetch(PDO::FETCH_ASSOC)){
    echo $vote["slug_game"];
    echo $vote["nb_votes"] . " Votes";
    echo "<a href='cookies.php?game=". $vote["slug_game"] . "'>Voter</a> <br>";
}

