<?php
// Connect to database
require('connect.php');


// Request to database (get nb_vote)
$q = $db->prepare("SELECT * FROM votes WHERE slug_game = :game ORDER BY nb_votes DESC");
$q->bindParam(":game", $_GET["game"]);
$q->execute();
$rang = 0;
$nb_vote = $q->fetch(PDO::FETCH_ASSOC);
/* Si pas de cookies on incrémente */
if (!isset($_COOKIE["Nepeuxplusvoter"])){
    $nb_votes = $nb_vote["nb_votes"] +1 ;
    $q = $db->prepare("UPDATE votes SET nb_votes= :nb_votes WHERE slug_game = :game ORDER BY nb_votes DESC");
    $q->bindParam(":nb_votes", $nb_votes);
    $q->bindParam(":game", $_GET["game"]);
    $q->execute();
} /* Si des cookies on bloque */
else if (isset($_COOKIE["Nepeuxplusvoter"])){
    echo '<p class="nonvote">Reviens dans 24h pour revoter!<p>';
    $nb_votes = $nb_vote["nb_votes"];

}
$q = $db->query("SELECT * FROM votes ORDER BY nb_votes DESC");
$q->execute();


?>