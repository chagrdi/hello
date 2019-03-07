<?php
// Connect to database
$db = new PDO('mysql:host=localhost;dbname="arcade","root","root"');

// Request to database (get nb_votes)
$q = $db->prepare("SELECT * FROM vote WHERE slug_game = :game");
$q->bindParam(":game", $_GET["game"]);
$q->execute();

$nb_votes = $q->fetch(PDO::FETCH_ASSOC);

$nb-votes = $nb_vote["nb_votes"]++;

var_dump($nb_votes);

?>