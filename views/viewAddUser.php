<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/addUser.css">
    <title>Mon compte</title>
</head>
<body>
    <?php require "./views/header.php"?>
    <div id="body">
        <h1>Bonjour, Ici tu peux te créer un compte</h1>

        <form id="form" action="./?page=addAccount" method="post">
            <label for="prenom">Votre Prénom* :</label><br/>
                <input class="inputConnect" type="text" name="prenom" require/><br/>
            <label for="nom">Votre Nom* :</label><br/>
                <input class="inputConnect" type="text" name="nom"require/><br/>
            <label for="email">Votre Email* :</label><br/>
                <input class="inputConnect" type="email" name="email" require/><br/>
            <label for="mdp">Votre Mot de Passe* :</label><br/>
                <input class="inputConnect" type="password" name="mdp" require/><br/>
            <label for="adresse">Votre Adresse Complète :</label><br/>
                <input class="inputConnect" type="text" name="adresse"/><br/>
            <label for="ville">Votre Ville :</label><br/>
                <input class="inputConnect" type="text" name="ville"/><br/>
            <label for="codePostal">Votre Code Postal :</label><br/>
                <input class="inputConnect" type="text" name="codePostal"/><br/>
                <input class="inputConnect" type="submit" value="créer un compte"/>
        </form>
    </div>
    <?php require "./views/footer.php" ?>
</body>
</html>