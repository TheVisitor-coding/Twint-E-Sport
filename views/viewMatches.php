<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil</title>
  <link href="./public/matches.css" rel="stylesheet">
  <link href="./public/game-filter1.css" rel="stylesheet">
  <link href="./public/sliderDate.js">
</head>
<body>
  <?php include "./views/header.php" ?>
  <?php include "./views/filter.php" ?>
  <!-- Header search bar -->
  <div class="head-title">
    <h1>Matchs et Tournois</h1>
    <div class="search">
      <span></span>
      <input type="text" placeholder="Rechercher un match ou un tournoi">
    </div>
  </div>
  
  <!-- Choisir Date -->
  <section class="head-date"> 
    <svg id="precedent" class="arrow" xmlns="http://www.w3.org/2000/svg" width="18.63" height="32.586" viewBox="0 0 18.63 32.586">
      <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M16.867,22.482,29.2,10.162a2.329,2.329,0,0,0-3.3-3.289L11.929,20.833a2.324,2.324,0,0,0-.068,3.211L25.888,38.1a2.329,2.329,0,0,0,3.3-3.289Z" transform="translate(-11.251 -6.194)" fill="#fff"/>
    </svg>
      <div class="container-date">
        <button class="button-date">Hier</button>
        <button class="button-date">Aujourd'hui</button>
        <button class="button-date">Demain</button>
        <button class="button-date">Demain</button>
        <button class="button-date">Demain</button>
        <button class="button-date">Demain</button>  
        <button class="button-date">Demain</button>  
        <button class="button-date">Demain</button>  
        <button class="button-date">Demain</button>  
        <button class="button-date">Demain</button>
        <button class="button-date">Demain</button>  
      </div> 
      <span class="hidding"></span>   
      <svg class="arrow" id="suivant" xmlns="http://www.w3.org/2000/svg" width="18.63" height="32.586" viewBox="0 0 18.63 32.586">
        <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M24.264,22.483l-12.33-12.32a2.329,2.329,0,0,1,3.3-3.289L29.2,20.833a2.324,2.324,0,0,1,.068,3.211L15.242,38.1a2.329,2.329,0,0,1-3.3-3.289Z" transform="translate(-11.251 -6.194)" fill="#fff"/>
      </svg>
  </section>
  

  <!-- section match info -->
  <section class="match-info">
    <h2>Matchs et Tournois du jour</h2>

    <!-- Infos du tournois -->
    <div class="tournament-info">
      <img src="./Image/valorant.png">
      <p>Call Of Duty Tournament</p>
    </div>

    <div class="container-card">
    <!-- Card d'un match -->
    <a href="./?page=viewMatch">
      <div class="card-match">
        <img src="./Image/valorant.png">
        <span class="separator"></span>
        <span class="separator"></span>

        <div class="team-match">
          <p>Millenium</p>
          <p>VS</p>
          <p>Vitality</p>
        </div>

        <div class="match-time">
          <span></span>
          <p>Live</p>
        </div>

      </div>
    </a>

    <!-- deuxième card d'un match -->
    <a href="./?page=viewMatch">
      <div class="card-match">
        <img src="https://via.placeholder.com/50x50">
        <span class="separator"></span>
        <span class="separator"></span>

        <div class="team-match">
          <p>Millenium</p>
          <p>VS</p>
          <p>Vitality</p>
        </div>

        <div class="match-time">
          <p>Live</p>
        </div>

      </div>
    </a>
  </div> <!-- fin container-card -->

      <!-- Infos du tournois -->
      <div class="tournament-info">
        <img src="./Image/valorant.png">
        <p>Call Of Duty Tournament</p>
      </div>
  
      <div class="container-card">
      <!-- Card d'un match -->
      <a href="./?page=viewMatch">
        <div class="card-match">
          <img src="./Image/valorant.png">
          <span class="separator"></span>
          <span class="separator"></span>
    
          <div class="team-match">
            <p>Millenium</p>
            <p>VS</p>
            <p>Vitality</p>
          </div>
    
          <div class="match-time">
            <span></span>
            <p>Live</p>
          </div>
    
        </div>
      </a>
      <!-- deuxième card d'un match -->
      <a href="./?page=viewMatch">
        <div class="card-match">
          <img src="https://via.placeholder.com/50x50">
          <span class="separator"></span>
          <span class="separator"></span>
    
          <div class="team-match">
            <p>Millenium</p>
            <p>VS</p>
            <p>Vitality</p>
          </div>
    
          <div class="match-time">
            <p>Live</p>
          </div>
    
        </div>
      </a>
    </div> <!-- fin container-card -->
  


  </section>
  <?php include "./views/footer.php" ?>
<script src="./public/sliderDate.js"></script>
</body>
</html>