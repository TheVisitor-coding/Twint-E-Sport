<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste Restaurants</title>
    <link rel="stylesheet" href="./public/accueil.css">
    <link rel="stylesheet" href="../public/accueil.css">
</head>
<body>
    <?php require "./views/header.php"?>
    <?php
    foreach($afficherArticles as $article){
    ?>
    <a href="http://localhost/projets/Ann%c3%a9e%202/POO/exercice12-Projet/?page=viewArticlesDetails&id=<?=$article['id']?>">
    <div class="card">
        <div class="header-card">
            <img class="image" src=<?php echo $article['image']?>>
        </div>
        <div class="card-middle">
            <div class="titre"><?php echo $article['titre']?></div><br/>
            <div class="desc"><?php echo $article['desc']?></div><br/>
          </div>
          <div class="footer-card">
            <span class="prix"><?php echo $article['prix']?> €</span>
          </div>
    </div>
    </a>
    <?php }?>

<?php require "./views/footer.php" ?>
</body>
</html>