<?php
/* On met un cookie dans le navigateur lors du vote */
$value = 'bloquervote';
/* On définit un temps de vie pour le cookie */
setcookie("Nepeuxplusvoter", $value, time() + 4);
header('Location: increase_vote.php');

// Connect to database
require('connect.php');

// Request to to database (get nb_vote)
require('request.php');
?>