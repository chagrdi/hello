
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hello</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
  <link rel="stylesheet" href="../../dist/assets/css/style.css">
  <!-- bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../js/script.js">
</head>

<body>

<!-- Header -->
<header class="masthead d-flex" id="avis">
    <div class="container text-center my-auto">
      <h1 class="mb-1">Laissez votre avis!</h1>
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="#liste">Nous serons content de vous lire</a>
      <a href="../../index.html" id="retour-accueil">Retour à l'accueil</a>
    </div>
    <div class="overlay"></div>
  </header>


  <p id="liste"></p>
  <div class="container" id="titre-liste">
      <div class="content-section-heading text-center">
        <h3 class="text-secondary mb-0">Espace commentaire</h3>
        <h2 class="mb-5">Laissez votre avis</h2>
      </div>
      <div class="row no-gutters">

</div>
<?php
// Connect to database
require('connect.php');
require('request.php');

?>
<!-- formulaire commentaires -->
<form action="comments.php" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Pseudo</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Mon pseudo" name="pseudo">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Le jeu que je veux commenter</label>
    <select class="form-control" id="exampleFormControlSelect1" name="id_game">
    <?php
    while($vote = $q->fetch(PDO::FETCH_ASSOC)){
        ?>
      <option><?= $vote["slug_game"]?></option>
      <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Mon commentaire</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="commentaire"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" value="ENVOYER">Publier</button>
</form>
    
       
    
<div class="">
    <p id="liste"></p>
      <div class="container" id="titre-liste">
          <div class="content-section-heading text-center">
            <h3 class="text-secondary mb-0 publicom" >Les commentaires publiés</h3>
          </div>
          <div class="row no-gutters">
    
    </div>
</div>


<?php 
// Etape 2: prepare request SELECT ALL FROM VOTES
$c = $db->prepare("SELECT * FROM comments");
// Etape 3: execute
$c->execute();
$comments = $c->fetch(PDO::FETCH_ASSOC)
?>
<?php
   while($comments = $c->fetch(PDO::FETCH_ASSOC)){
              ?>
              <div class="comment">
                <div class="notice notice-warning">
            <div id="pseudojeu">
           <p>Pseudo:</p>
           <strong><?= $comments["pseudo"]?></strong> 
       </div>
        
        <div id="avisjeu">
            <p>Un avis sur</p>
            <strong><?= $comments["id_game"] ?></strong> 
        </div>
        <p id="soncom">Son commentaire :</p>
        <strong id="com"><?= $comments["content"] ?></strong>
         </div>
        <?php } ?>
        </div>


    

    


    






  <!-- du js -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>





