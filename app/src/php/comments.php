<?php
// Connect to database
require('connect.php');
// Request to to database (get nb_vote)
require('request.php');

var_dump($_POST);



// Request to database (get nb_vote)
$q = $db->prepare("SELECT * FROM comments WHERE id-game = :id");
$q->bindParam(":game", $_GET["game"]);
$q->execute();
$rang = 0;
$comments = $q->fetch(PDO::FETCH_ASSOC);
/* Si pas de cookies on incrémente */

$q = $db->query("SELECT * FROM comments");
$q->execute();




?>
