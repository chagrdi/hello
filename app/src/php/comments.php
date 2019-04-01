<?php

// Connect to database
require('connect.php');
// Prepare request INSERT INTO table VALUES WHERE id = :id
$q = $db->prepare("INSERT INTO comments (pseudo, content, id_game) VALUES (:pseudo, :content, :id_game)");
// bindParam
$q->bindParam(":id_game", $_POST["id_game"]);
$q->bindParam(":content", $_POST["commentaire"]);
$q->bindParam(":pseudo", $_POST["pseudo"]);
// execute
$q->execute();

// header location
header("Location: commentaires.php");  
?>

 
