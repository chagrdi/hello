<?php 

session_start();

if(isset($_POST['pseudo'])){
    $_SESSION['pseudo'] = $_POST['pseudo'];
}

require 'request.php'; 

var_dump($_POST);



$dbh = new PDO('mysql:host=localhost;dbname=chat', 'root', 'root');


if(isset($_POST['message'])){

    $requete = $dbh->prepare('INSERT INTO messages VALUES (pseudo, :message)');
    $requete->execute(array(
        'pseudo' => $_SESSION['pseudo'],
        'message' => $_POST ['message']
    ));

}

?>



<div class="container">

<h3>BONJOUR <?php echo $_SESSION['pseudo']; ?> </h3>



<div>

<?php 

$requete = $dbh->query ('SELECT * FROM messages');
while($donnees = $requete->fetch()){

    echo $donnees['pseudo'] . ':';
    echo $donnees['message'] . '<br>' ;

}


?>



</div>

<form action="chat.php" method="post">
<textarea name="message" id="" cols="30" rows="10"></textarea>
<input type="submit" value="envoyer">
</form>




</div>




