<?php
 require_once "./controllers/controllerTwintESport.php";
 require_once "./controllers/controllerApi.php";

$twintESport = new TwintESportController;
$apiDatas = new ApiController;

session_start();

if(empty($_GET['page'])){
    $twintESport->displayAccueil();
} else {
    switch($_GET['page']){
        case "accueil" : $twintESport->displayAccueil();
        break;
        case "viewTournois": $twintESport->displayTournois();
        break;
        case "viewMatches": $twintESport->displayMatches();
        break;
        case "viewJoueur": $apiDatas->vueJoueur($_GET['id']);
        break;
        case "viewJoueurs": $apiDatas->playerDatas();
        break;
        case "viewMatch": $twintESport->displayMatch();
        break;
        case "viewSeConnecter" : $twintESport->afficherSeConnecter();
        break;
        case "connect" : $twintESport->connexion();
        break;
        case "viewMonCompte" : $twintESport->displayUser();
        break;
        case "modifyAccount" : $twintESport->modifyContent();
        break;
        case "seDeconnecter" : $twintESport->seDeconnecter();
        break;
        case "creerUnCompte" : $twintESport->displayAddUser();
        break;
        case "addAccount" : $twintESport->addUser($_POST['email'], $_POST['mdp'], $_POST['prenom'], $_POST['nom']);
        break;
        
    }
}

?>