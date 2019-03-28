<?php

// Etape 1: connect database
// Connect to database
require('connect.php');

// Etape 2: prepare request SELECT ALL FROM VOTES
$q = $db->prepare("SELECT * FROM votes");
// Etape 3: execute

// Etape 4: fetch + boucle
/*     while($donnes = $request->fetch()){

            preapre SELECT ALL FROM coments WHERE id = $donnees["id]


    } */