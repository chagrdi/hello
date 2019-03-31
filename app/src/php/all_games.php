<?php

// Etape 1: connect database
// Connect to database
require('connect.php');

// Etape 2: prepare request SELECT ALL FROM VOTES
$q = $db->prepare("SELECT * FROM votes");
// Etape 3: execute
$q->execute();
// Etape 4: fetch + boucle

while($donnees = $q->fetch(PDO::FETCH_ASSOC)){

        $q = $db->prepare("SELECT * FROM comments WHERE id= $donnees[id]");
        $q->execute();


}

header("Location: comments.php");
/*     while($donnes = $request->fetch()){

            preapre SELECT ALL FROM coments WHERE id = $donnees["id]


    } */