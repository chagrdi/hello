<?php
// Connect to database
$db = new PDO('mysql:host=localhost;dbname="arcade","root","root"');

// Request to database (get nb_votes)
$q = $db->prepare("SELECT * FROM vote WHERE slug_game = :game");
$q->bindäraù(":game", $_GET["game"]);
$q->execute();

$nb_votes = $q->fetch(PDO::FETCH_ASSOC);

var_dump($nb_votes);

?>