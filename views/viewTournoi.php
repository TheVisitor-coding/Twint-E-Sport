<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tournois</title>
  <link href="./public/tournoi.css" rel="stylesheet">
  <link href="./public/game-filter1.css" rel="stylesheet">
</head>
<body>
  <?php include "./views/header.php" ;
  include "./views/filter.php"; ?>
  <!-- Section Head Tournoi -->
  <section class="head-page">
    <h1>Tournois</h1>
    <p>Bienvenue dans le monde de l'e-sport, un univers passionnant où les joueurs peuvent non seulement affronter d'autres joueurs de même niveau, mais également gagner de l'argent en compétitionnant. Si vous cherchez à atteindre ces objectifs, vous êtes au bon endroit. 
      Nous sommes fiers de vous offrir la possibilité d'organiser votre propre tournoi ou de rejoindre un tournoi existant, et de participer à des compétitions de haut niveau avec des joueurs du monde entier.</p>
    
      <div class="button-tournament">
        <button class="active" id="en-cours-btn">En Cours</button>
        <button id="a-venir-btn">A Venir</button>
      </div>
      <script src="./public/bouton-change.js"></script>
  </section>

  <!-- Section Card Tournois-->
  <section class="tournois">
    <div class="card">
      <img src="./public/actu-esport.jpg">
      <h3>Nom Tournoi</h3>
      <p id="date"><i>15 Août 2023 / 14h - 15h</i></p>

      <div class="content">
        <div class="tournoi-infos">
          <p>Cashprize : </p>
          <p>Jeu : </p>
          <p>Type : </p>
        </div>

        <div class="tournoi-infos">
          <p>100 000 $</p>
          <p>Rocket League</p>
          <p>1 VS 1</p>
        </div>
      </div>
      <a href="./?page=viewMatches"><button class="button-join">Let's Go !</button></a>
    </div>
  </section>

  <section class="background-img">
    <div class="img">
      <h3>Les Matchs du Jour</h3>
      <button>Voir</button>
    </div>
  </section>
  <?php include "./views/footer.php" ?>
</body>
</html>