
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hello</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
  <link rel="stylesheet" href="/app/dist/assets/css/style.css">
  <!-- bootsrtap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="app/src/js/script.js">
</head>

<body>

  <!-- PREMIER ECRAN LE CLASSEMENT -->
  <header>

    <div class="premier">
      <!-- titre-->
      <h1 class="display-1">Bienvenue!</h1>
      <h1 class="display-4">Plateforme de jeux des B2</h1>
    </div>

  </header>
  <!-- FIN PREMIER ECRAN LE CLASSEMENT --------------------------->


  <!-- DEUXIEME ECRAN SLIDER AVEC TROIS PREMIERS -->


  <div class="slider">
    <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="app/src/assets/img/minimaliste.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Premier Jeu</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="app/src/assets/img/cool.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Deuxième Jeu</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="app/src/assets/img/cool.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Troisième Jeu</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <button type="button" class="btn btn-primary" href="app/src/php/increase_vote.php">Je vote</button>
  <!-- DEUXIEME ECRAN SLIDER AVEC TROIS PREMIERS ------------------->


  <!-- TROISIEME ECRAN LES 8 AUTRES JEUX -->
  <section class="jeux">


    <!-- premiere ligne de cards -->
    <div class="container cards">
      <div class="card" style="width: 10rem;">
        <img class="card-img-top" src="app/src/assets/img/anis.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Anis's Game!</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
        </div>
      </div>


      <div class="card" style="width: 10rem;">
        <img class="card-img-top" src="app/src/assets/img/arthur.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Arthur Snooz</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
        </div>
      </div>


      <div class="card" style="width: 10rem;">
        <img class="card-img-top" src="app/src/assets/img/charlelie.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Charlelie</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
        </div>
      </div>


      <div class="card" style="width: 10rem;">
        <img class="card-img-top" src="app/src/assets/img/clara.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Clara Sanchez</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
          <a href="src/php/cookies.php?game=macron">Voter</a>
        </div>
      </div>
    </div>

    <!-- deuxieme ligne de cards -->
    <div class="container cards">
      <div class="card" style="width: 10rem;">
        <img class="card-img-top" src="app/src/assets/img/gabriel.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Gabrieeeel</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
        </div>
      </div>


      <div class="card" style="width: 10rem;">
        <img class="card-img-top" src="app/src/assets/img/roxane.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Roxaaaane</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
        </div>
      </div>


      <div class="card" style="width: 10rem;">
        <img class="card-img-top" src="app/src/assets/img/thomas.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Thomas</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
        </div>
      </div>


      <div class="card" style="width: 10rem;">
        <img class="card-img-top" src="app/src/assets/img/simon.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Simon Mutelet</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
        </div>
      </div>
    </div>

    <!-- derniere ligne de cards -->
    <div class="container cards">
      <div class="card" style="width: 10rem;">
        <img class="card-img-top" src="app/src/assets/img/nicolas.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nicolas</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
        </div>
      </div>


      <div class="card" style="width: 10rem;">
        <img class="card-img-top" src="app/src/assets/img/clarap.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Clara Pillault</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
        </div>
      </div>


      <div class="card" style="width: 10rem;">
        <img class="card-img-top" src="app/src/assets/img/seb.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Sebastian</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
        </div>




  </section>
  <!-- TROISIEME ECRAN LES 8 AUTRES JEUX ---------------------------->

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
