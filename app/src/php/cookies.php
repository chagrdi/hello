<?php
$value = 'something from somewhere';
setcookie("TestCookie", $value, time() + 60);
header('Location: increase_vote.php');
?>