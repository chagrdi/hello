<a href="cookies.php?game=macron">Voter</a>

<br>

<?php


$game = "macron";
// Connect to database
$db = new PDO('mysql:host=localhost;dbname=jeu-arcade', 'root', 'root');

// Reques to to database (get nb_vote)
$q = $db->prepare("SELECT * FROM votes WHERE slug_game = :game");
$q->bindParam(":game", $game);
$q->execute();

$data = $q->fetch(PDO::FETCH_ASSOC);

echo $data["nb_votes"] . " Votes";

?>

<?php

// Connect to database
$db = new PDO('mysql:host=localhost;dbname=jeu-arcade', 'root', 'root');

if (isset($_COOKIE["TestCookie"])){
    echo "tu ne peux plus voter";
   
}


// Reques to to database (get nb_vote)
$q = $db->prepare("SELECT * FROM votes WHERE slug_game = :game");
$q->bindParam(":game", $_GET["game"]);
$q->execute();

$nb_vote = $q->fetch(PDO::FETCH_ASSOC);

$nb_votes = $nb_vote["nb_votes"] +1 ;

$q = $db->prepare("UPDATE votes SET nb_votes= :nb_votes WHERE slug_game = :game");
$q->bindParam(":nb_votes", $nb_votes);
$q->bindParam(":game", $_GET["game"]);
$q->execute();

$db = new PDO('mysql:host=localhost;dbname=jeu-arcade', 'root', 'root');

$q = $db->query("SELECT * FROM votes");
$q->execute();


while($vote = $q->fetch(PDO::FETCH_ASSOC)){
    echo $vote["slug_game"] . "<br>";
    echo $vote["nb_votes"] . " Votes <br>";
    echo "<a href='increase_vote.php?game=". $vote["slug_game"] . "'>Voter</a> <br>";
   
}

