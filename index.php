<?php
 require_once "./controllers/controllerTwintESport.php";

$twintESport = new TwintESportController;

session_start();

if(empty($_GET['page'])){
    $twintESport->displayAccueil();
} else {
    switch($_GET['page']){
        case "accueil" : $twintESport->displayAccueil();
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
        case "addAccount" : $twintESport->addUser($_POST['email'], $_POST['mdp'], $_POST['prenom'], $_POST['nom'], $_POST['adresse'], $_POST['ville'], $_POST['codePostal']);
        break;
        
    }
}

?>