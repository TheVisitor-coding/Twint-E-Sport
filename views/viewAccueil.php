<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste Restaurants</title>
    <link rel="stylesheet" type="text/css" href="./public/accueil.css">
    <link rel="stylesheet" type="text/css" href="./public/game-filter2.css">
</head>
<body>
    <?php require "./views/header.php"?>
    <section class="actualite">
        <div class="encadrement">
            <h1>Top News</h1>
            <div class="actu1">
                <div class="img">
                    <img alt="image d'un professionnel du gaming" src="./public/actu-esport.jpg" />
                </div>
                <div class="description">
                    <h2>Le marché du esport en pleine expansion</h2>
                    <p>Discipline démocratisée depuis peu, l'eSport prend une place de plus en plus important dans l'eco-système du jeux-vidéo. Tenez-vous informé de l'actualité.</p><br/>
                    <p class="time">Il y a 2 heures</p>
                    <a href="#">Lire...</a>
                </div>
            </div>
            <div class="petitesactus">
                <div class="actumini">
                    <img alt="image d'un PC" src="./public/actu-esport.jpg" />
                    <h3>Actu 2</h3>
                    <div class="timelink">
                        Il y a 36 min
                        <a href="#">Lire...</a>
                    </div>
                </div>
                <div class="actumini">
                    <img alt="image d'un PC" src="./public/actu-esport.jpg" />
                    <h3>Actu 3</h3>
                    <div class="timelink">
                        Il y a 36 min
                        <a href="#">Lire...</a>
                    </div>
                </div>
                <div class="actumini">
                    <img alt="image d'un PC" src="./public/actu-esport.jpg" />
                    <h3>Actu 4</h3>
                    <div class="timelink">
                        Il y a 36 min
                        <a href="#">Lire...</a>
                    </div>
                </div>
                <div class="actumini">
                    <img alt="image d'un PC" src="./public/actu-esport.jpg" />
                    <h3>Actu 5</h3>
                    <div class="timelink">
                        Il y a 36 min
                        <a href="#">Lire...</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require './views/filter.php'?>
    <section class="videos">
        <div class="videosplanning">
            <div class="videoLinks">
                <h2>En direct</h2>
                <div class="live">
                    <div class="livemini">
                        <a href="#">
                            <img alt="image d'un live de esport" src="./public/live1.png" />
                            <h3>Quake pro league</h3>
                        </a>
                    </div>
                    <div class="livemini">
                        <a href="#">
                            <img alt="image d'un live de esport" src="./public/live2.png" />
                            <h3>eLeague 1 2023</h3>
                        </a>
                    </div>
                    <img alt= "flèche vers la droite" src="./public/arrow-icon.png" />
                </div>
                <h2>Résumé des derniers matchs</h2>
                <div class="replay">
                    <div class="replaymini">
                        <a href="#">
                            <img alt="image d'un replay de esport" src="./public/live2.png" />
                            <h3>ESL R1 2023</h3>
                        </a>
                    </div>
                    <div class="replaymini">
                        <a href="#">
                            <img alt="image d'un replay de esport" src="./public/live1.png" />
                            <h3>ESL R1 2023</h3>
                        </a>
                    </div>
                    <img alt= "flèche vers la droite" src="./public/arrow-icon.png" />
                </div>
            </div>
            <div class="planning">
                <div class="titre">
                    <h2>Match à venir</h2>
                </div>
                <div class="h3">
                    <h3>League of legende<h3>
                </div>
                <div class="game">
                    <div class="match">
                        <div class="logolive">
                            <img alt="logo Live" src="./public/live-icon.png" />
                        </div>
                        <div class="equipes">
                            <div class="equipe1">
                                <div class="ekip">
                                    <img alt="logo team liquid" src="./public/team-liquid.png" />
                                    <h4>Team Liquid</h4>
                                </div>
                                <span class="score">0</span>
                            </div>
                            <div class="equipe2">
                                <div class="ekip">
                                    <img alt="logo team G2 Esport" src="./public/team-g2esport.png" />
                                    <h4>G2 Esport</h4>
                                </div>
                                <span class="score">2</span>
                            </div>
                        </div>
                    </div>
                    <div class="match">
                        <div class="logolive">
                            <img alt="logo Live" src="./public/live-icon.png" />
                        </div>
                        <div class="equipes">
                            <div class="equipe1">
                                <div class="ekip">
                                    <img alt="logo team liquid" src="./public/team-liquid.png" />
                                    <h4>Team Liquid</h4>
                                </div>
                                <span class="score">0</span>
                            </div>
                            <div class="equipe2">
                                <div class="ekip">
                                    <img alt="logo team G2 Esport" src="./public/team-g2esport.png" />
                                    <h4>G2 Esport</h4>
                                </div>
                                <span class="score">2</span>
                            </div>
                        </div>
                    </div>
                    <div class="match">
                        <div class="logolive">
                            <img alt="logo Live" src="./public/live-icon.png" />
                        </div>
                        <div class="equipes">
                            <div class="equipe1">
                                <div class="ekip">
                                    <img alt="logo team liquid" src="./public/team-liquid.png" />
                                    <h4>Team Liquid</h4>
                                </div>
                                <span class="score">0</span>
                            </div>
                            <div class="equipe2">
                                <div class="ekip">
                                    <img alt="logo team G2 Esport" src="./public/team-g2esport.png" />
                                    <h4>G2 Esport</h4>
                                </div>
                                <span class="score">2</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="voirplus">
                    <p>voir les matchs</p>
                    <img alt="flèche vers la droite" src="./public/white-arrow-icon.png" />
                </div>
            </div>
        </div>
    </section>
    <section class="teams">
        <div class="ekip">
            <h2>Les équipes les plus suivies dans ton pays</h2>
            <div class="encadrementequipesmini">
                <div class="equipemini">
                    <img alt="logo de Vitality" src="./public/vitality-icon.png" />
                    <h3>Vitality</h3>
                </div>
                <div class="equipemini">
                    <img alt="logo de Mandatory" src="./public/mandatory-icon.png" />
                    <h3>Mandatory</h3>
                </div>
                <div class="equipemini">
                    <img alt="logo de Vitality" src="./public/vitality-icon.png" />
                    <h3>Vitality</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="players">
        <div class="joueurs">
            <h2>Joueurs du moment</h2>
            <div class="joueursencadrement">
                <div  class="fichejoueur">
                    <img alt="photo d'un joueur d'esport" src="./public/faker.png" />
                    <h3 class="name">Faker</h3>
                    <h3 class="team">SKT T1</h3>
                    <h3 class="game">League of Legends</h3>
                </div>
                <div  class="fichejoueur">
                    <img alt="photo d'un joueur d'esport" src="./public/yellow-star.png" />
                    <h3 class="name">Yellow Star</h3>
                    <h3 class="team">Fnatic</h3>
                    <h3 class="game">League of Legends</h3>
                </div>
                <div  class="fichejoueur">
                    <img alt="photo d'un joueur d'esport" src="./public/kaydop.png" />
                    <h3 class="name">Kaydop</h3>
                    <h3 class="team">Solary</h3>
                    <h3 class="game">Rocket League</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="competitions">
        <div class="compet">
            <h2>Competitions populaires</h2>
            <div class="encadrementcompetmini">
                <div class="competmini">
                    <img alt="logo de VTC 2023" src="./public/compet-icon.png" />
                    <h3>VTC 2023</h3>
                </div>
                <div class="competmini">
                    <img alt="logo de VTC 2023" src="./public/compet-icon.png" />
                    <h3>VTC 2023</h3>
                </div>
                <div class="competmini">
                    <img alt="logo de VTC 2023" src="./public/compet-icon.png" />
                    <h3>VTC 2023</h3>
                </div>
                <div class="competmini">
                    <img alt="logo de VTC 2023" src="./public/compet-icon.png" />
                    <h3>VTC 2023</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- <?php
    foreach($displayGames as $game){
    ?>
    <a href="http://localhost/projets/Ann%c3%a9e%202/POO/exercice12-Projet/?page=viewArticlesDetails&id=<?=$game['id']?>">
    <div class="card">
        <div class="header-card">
            <img class="image" src=<?php echo $game['picture']?>>
        </div>
        <div class="card-middle">
            <div class="titre"><?php echo $game['name']?></div><br/>
          </div>
    </div>
    </a> -->
    <!-- <?php }?> -->

<?php require "./views/footer.php" ?>
</body>
</html>