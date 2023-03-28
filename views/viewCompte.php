<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/compte.css">
    <title>Mon compte</title>
</head>
<body>
    <?php require "./views/header.php"?>
    <div id="body">
        <h1>Bonjour <?= $user['prenom']?>, Ici tu peux modifier tes informations</h1>
        <form action="./?page=modifyAccount" method="post">
            <label for="prenom">Votre Prénom :</label><br/>
                <input class="inputConnect" type="text" value="<?= $user['prenom']?>" name="prenom"/><br/>
            <label for="nom">Votre Nom :</label><br/>
                <input class="inputConnect" type="text" value="<?= $user['nom']?>" name="nom"/><br/>
            <label for="email">Votre Email :</label><br/>
                <input class="inputConnect" type="email" value="<?= $user['email']?>" name="email"/><br/>
            <label for="mdp">Votre Mot de Passe :</label><br/>
                <input class="inputConnect" type="password" value="<?= $user['mdp']?>" name="mdp"/><br/>
            <label for="adresse">Votre Adresse Complète :</label><br/>
                <input class="inputConnect" type="text" value="<?= $user['adresse']?>" name="adresse"/><br/>
            <label for="ville">Votre Ville :</label><br/>
                <input class="inputConnect" type="text" value="<?= $user['ville']?>" name="ville"/><br/>
            <label for="codePostal">Votre Code Postal :</label><br/>
                <input class="inputConnect" type="text" value="<?= $user['codePostal']?>" name="codePostal"/><br/>
                <input class="inputConnect" id="envoyer" type="submit"/>
        </form>
        <a id="deconnect" href="./?page=seDeconnecter"><button id="btnDeconnect">Se déconnecter</button></a>
    </div>
    <?php require "./views/footer.php" ?>
</body>
</html>