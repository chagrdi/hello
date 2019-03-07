<?php
// Connect to database
$db = new PDO('mysql:host=localhost;dbname="arcade","root","root"');

// Request to database (get nb_votes)
$q = $db->prepare("SELECT * FROM vote WHERE slug_game = :game");

$nb_votes++;

?>