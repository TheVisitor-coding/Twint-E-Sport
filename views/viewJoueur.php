<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon Compte</title>
  <link rel="stylesheet" type="text/css" href="./public/joueur.css">
  <link>
</head>
  <body>
    <?php require "./views/header.php" ?>
    <div class="background">
    <div class="Cart">
      <div class="img">
        <img src="./public/2.jpg">
      </div>
      <div class="information">
        <h1><?= $data['MatchName']?></h1>
        <div class="image">
          <!-- <img src="./public/1.jpg"> -->
          <h1><?= $data['FirstName']?> <?= $data['LastName']?></h1>
        </div>
        <div class="hr">
          <hr>
        </div>
        
        <div class="age">
          <h2>Nationnalité</h2>
          <h3><?= $data['Nationality']?></h3>
        </div>
        <hr>
        <div class="Team">
          <h2>Rôle</h2>
          <h3><?= $data['Position']?></h3>
        </div>
        <hr>
      </div>
    </div>
    <div class="trophee">
      <h2>Trophée</h2>
      <h3>1X world</h3>
    </div>
    <hr>
    <div class="container">
      <div class="Statistiques">
      <h1>Statistiques</h1>
    </div>
    <div style="text-align:center;">
      <div class="card">
        <h2>Record</h2>
        <p>213W - 149L</p>
      </div>
      <div class="card">
        <h2>Win rate</h2>
        <p>60%</p>
      </div>
      <div class="card">
        <h2>KDA</h2>
        <p>4.6</p>
      </div>
      <div class="card">
        <h2>Cs par minute</h2>
        <p>1.1</p>
      </div>
    </div>
    <div class="hr2">
      <hr>
    </div>

    <div style="text-align:center;">
      <div class="card">
        <h2>OR / MIN</h2>
        <p>255</p>
      </div>
      <div class="card">
        <h2>Kill Participation</h2>
        <p>69,1%</p>
      </div>
      <div class="card">
        <h2>Gold %</h2>
        <p>14,3%</p>
      </div>
      
    </div>
    
    </div>
  </div>
  <?php require "./views/footer.php" ?>
  </body>
</html>