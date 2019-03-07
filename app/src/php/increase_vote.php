<?php
// Connect to database
$db = new PDO('mysql:host=localhost;dbname=arcade','root','root');

// Request to database (get nb_votes)
$q = $db->prepare("SELECT * FROM vote WHERE slug_game = :game");
$q->bindParam(":game", $_GET["game"]);
$q->execute();

$nb_vote = $q->fetch(PDO::FETCH_ASSOC);

$nb_votes = $nb_vote["nb_votes"] +1;

var_dump($nb_votes);

$q = $db->prepare("UPDATE");

?>