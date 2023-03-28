<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/seConnecter.css">
    <title>page détail</title>
</head>
<body>
  <?php include "./views/header.php";?>
  <div id ="body">
    <form id="form" action="./?page=connect" method="POST">
    <input type="email" name="email" class="inputConnect" placeholder="ton email"/><br/>
    <input type="password" name="mdp" class="inputConnect" placeholder="ton mot de passe"/><br/>
    <input type="submit" class="inputConnect">
    </form>
    <a href="./?page=creerUnCompte"><button id="button">créer un compte</button></a>
  </div>
  <?php require "./views/footer.php" ?>
</body>
</html>