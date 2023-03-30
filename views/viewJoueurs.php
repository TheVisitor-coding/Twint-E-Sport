<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./public/joueurs.css" />
    <title>esport</title>
</head>
<body>
  <?php require "./views/header.php" ?>
    <div class="background">
        <div class="title_1">

            <h1>Joueurs Esport</h1>

        </div>

        <hr class="solid">

        <div class="section_search">

             <div class="search_bar">
                <form class="form" action="./?page=viewJoueurs" method="POST">
                <button class="submitBtn" type="submit"><img src="./public/search.png" alt="search" class="icon_search"></button>
                <input type="text" placeholder="Rechercher un joueur" name="name" class="search">
                </form>
            </div>

            <div class="classified">
                <p>Trier par</p>

                <div class="dropdown">
                    <button class="dropbtn">Jeux</button>
                    <div class="dropdown-content">
                      <a href="#">Counter-Strike</a>
                      <a href="#">League Of Legends</a>
                      <a href="#">Rocket League</a>
                    </div>
                  </div>

            </div>

        </div>
        <hr class="solid">

        <div class="section_joueur">


        

          <div class="block">
            <?php foreach ($data as $datas){?>
            <a href="./?page=viewJoueur&id=<?= $datas['PlayerId']?>">
              <div class="container">
                <img src="./public/yellow.jpg" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text"><?= $datas['MatchName']?></div>
                  <div class="text2">Joueur League of Legends </div>
                </div>
              </div>
            </a>
            <?php } ?>
            
        </div>

      </div>




    </div>

  </div>
  <?php require "./views/footer.php" ?>    
</body>
</html>