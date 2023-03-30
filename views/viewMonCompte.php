<!DOCTYPE html>
<html>
<head>
	<title>Ma page de profil</title>
	<link rel="stylesheet" type="text/css" href="./public/monCompte.css">
  <link rel="stylesheet" type="text/css" href="./public/game-filter2.css">
</head>
<body>
  <?php require "./views/header.php" ?>
  <div class="background">
    <div class="background-image">
      <div class="profile-container">
        <img src="./public/331_one-piece-s01_MAGA0051743S_COVER169-1.jpg" class="profile-picture">
        <h1 class="username">Xx_DarkMenage_xX</h1>
        <button class="edit-profile-button">Modifier le profil</button>
      </div>
      <div class="button-container">
        <button class="preferences-button">Préférences</button>
        <button class="statistics-button">Statistiques</button>
        <button class="achievements-button">Succès</button>
      </div>
    </div>
  
    <div class="preferences">
      <h1>
        Préferences
      </h1>

      <h2>
        Epinglés
      </h2>
    </div>

    <div class="card">
      <img src="./public/190904-esl-pro.jpg" alt="Image 1">
      <h2>Tournoi 2024</h2>
    </div>
    <div class="card">
      <img src="./public/s1mple-ESL.jpg" alt="Image 2">
      <h2>Meilleurs items</h2>
    </div>
    <div class="card">
      <img src="./public/190904-esl-pro.jpg" alt="Image 3">
      <h2>Tournoi 2024</h2>
    </div>
    <div class="card">
      <img src="./public/s1mple-ESL.jpg" alt="Image 4">
      <h2>Meilleurs items</h2>
    </div>
    <div class="card">
      <img src="./public/190904-esl-pro.jpg" alt="Image 5">
      <h2>Tournoi 2024</h2>
    </div>
    
    <div class="v-jeux-fav">
      <h2>Vos jeux favoris</h2>
      <button class="btn2">Modifier vos favoris</button>
    </div>
    <div class="Vs-jeux-fav">
      <div class="card1">
        <img src="./public/faker.jpg" alt="Image 1">
        <h2>Faker</h2>
      </div>
      <div class="card1">
        <img src="./public/Kaydop.jpg" alt="Image 2">
        <h2>Kaydop</h2>
      </div>
      <div class="card1">
        <img src="./public/faker.jpg" alt="Image 3">
        <h2>Faker</h2>
      </div>
      <div class="card1">
        <img src="./public/Kaydop.jpg" alt="Image 4">
        <h2>Kaydop</h2>
      </div>
      <div class="card1">
        <img src="./public/faker.jpg" alt="Image 5">
        <h2>Faker</h2>
      </div>
      <div class="card1">
        <img src="./public/Kaydop.jpg" alt="Image 4">
        <h2>Kaydop</h2>
      </div>
     </div>

    <div class="vos-equipes">
      <h2>Vos joeurs favoris</h2>
      <button class="btn1">Modifier vos favoris</button>
    </div>
    <div class="Vos-équipes-favorites">
      <div class="card2">
        <img src="./public/faker.jpg" alt="Image 1">
        <h2>Faker</h2>
      </div>
      <div class="card2">
        <img src="./public/Kaydop.jpg" alt="Image 2">
        <h2>Kaydop</h2>
      </div>
      <div class="card2">
        <img src="./public/faker.jpg" alt="Image 3">
        <h2>Faker</h2>
      </div>
      <div class="card2">
        <img src="./public/Kaydop.jpg" alt="Image 4">
        <h2>Kaydop</h2>
      </div>
      <div class="card2">
        <img src="./public/faker.jpg" alt="Image 5">
        <h2>Faker</h2>
      </div>
      <div class="fleche"><svg xmlns="http://www.w3.org/2000/svg" width="32.844" height="57.449" viewBox="0 0 32.844 57.449">
        <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M34.194,34.911,12.456,13.191a4.106,4.106,0,0,1,5.815-5.8L42.9,32a4.1,4.1,0,0,1,.12,5.661L18.288,62.446a4.106,4.106,0,0,1-5.815-5.8Z" transform="translate(-11.251 -6.194)" fill="#b47be6"/>
      </svg>
      </div>
    </div>
    <div>
      <div class="vos-jeux-favoris">
        <h2>Vos jeux favoris</h2>
        <button class="btn3">Modifier vos favoris</button>
      </div>
      <div class="v-j-f">
        <img src="https://via.placeholder.com/300x150">
        <img src="https://via.placeholder.com/300x150">
        <img src="https://via.placeholder.com/300x150">
        <img src="https://via.placeholder.com/300x150">
        <img src="https://via.placeholder.com/300x150">
        <img src="https://via.placeholder.com/300x150">
        <img src="https://via.placeholder.com/300x150">
        <img src="https://via.placeholder.com/300x150">
      </div>
    </div>
    <div class="Statistiques">
      <h1>
        Statistiques
      </h1>
      <?php include "./views/filter.php"; ?>
      <div class="grap">
        <div class="grap-stat"> <img src="https://via.placeholder.com/800x350"></div>
       <div class="grap-cam"><img src="https://via.placeholder.com/300x300"></div>
        
      </div>
    </div>
    <div class="Succes">
      <h1>
        Succes
      </h1>
      <h2>
        Succès Tournois
      </h2>
      <div class="rank">
        <img src="./public/RANK-01.png">
        <img src="./public/RANK-02.png">
        <img src="./public/RANK-03.png">
        <img src="./public/RANK-04.png">
        <img src="./public/RANK-05.png">
      </div>
      <h2>
        Succès Tournois
      </h2>
      <div class="rank2">
        <img src="./public/RANK-11.png">
        <img src="./public/RANK-06.png">
        <img src="./public/RANK-07.png">
        <img src="./public/RANK-08.png">
        <img src="./public/RANK-09.png">
      </div>
    </div>
  </div>
  <section class="sectiondeconnect">
    <div class="deconnect"><a href="./?page=seDeconnecter"><button id="button">Se déconnecter</button></a></div>
  </deconnect>
  
  <?php require "./views/footer.php" ?>
</body>
</html>
