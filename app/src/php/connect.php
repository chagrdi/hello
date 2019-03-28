<?php
// Connect to database
try {
    $db = new PDO('mysql:host=localhost;dbname=jeu-arcade', 'root', 'root');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}