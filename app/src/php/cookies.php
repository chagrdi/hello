<?php
$value = 'something from somewhere';
setcookie("TestCookie", $value, time() + 4);
header('Location: increase_vote.php');
// Connect to database
require('connect.php');
// Request to to database (get nb_vote)
require('request.php');
?>