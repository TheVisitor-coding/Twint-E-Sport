<?php
require_once "./models/classGame.php";
require_once "./models/classUsers.php";
require_once "./models/classVideo.php";

class TwintESportController{
    private $games;
    private $users;
    private $video;

    public function __construct(){
        $this->games = new Game;
        $this->users = new User;
        $this->videos = new Video;
    }

    public function displayAccueil(){
        $videos = $this->videos->getLives();
        $displayGames = $this->games->getGames();
        require "./views/viewAccueil.php";
    }
    public function displayTournois(){
        require "./views/viewTournoi.php";
    }
    public function displayMatches(){
        require "./views/viewMatches.php";
    }
    public function displayMatch(){
        require "./views/viewMatch.php";
    }
    public function displayPlayer(){
        require "./views/viewJoueur.php";
    }
    public function displayPlayers(){
        require "./views/viewJoueurs.php";
    }
    public function displayUser(){
        if (isset($_SESSION['iduser'])){
            $iduser = $_SESSION['iduser'];
            $user = $this->users->getUserById($iduser);
            require "./views/viewMonCompte.php";
        }else{
            header ('Location: http://localhost/twint/Twint-E-Sport/');
            exit();
        }
    }
    public function modifyContent(){
        if (isset($_SESSION['iduser'])){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $this->users->modifyUser($iduser, $_POST['email'], $_POST['mdp'], $_POST['prenom'], $_POST['nom'], $_POST['adresse'], $_POST['ville'], $_POST['codePostal']);
                header ('Location: http://localhost/twint/Twint-E-Sport/?page=viewMonCompte');
                exit();
            }else{
                header ('Location: http://localhost/twint/Twint-E-Sport/');
                exit();
            }
        }else{
            header ('Location: http://localhost/twint/Twint-E-Sport/');
            exit();
        }
    }
    public function seDeconnecter(){
        unset($_SESSION['iduser']);

        session_unset();
        session_destroy();

        header('Location: http://localhost/twint/Twint-E-Sport/');
        exit();
    }
    public function displayAddUser(){
        if (empty($_SESSION['iduser'])){
            require './views/viewAddUser.php';
        }else{
            header ('Location:http://localhost/twint/Twint-E-Sport/');
            exit();
        }
    }
    public function addUser($email,$mdp,$prenom,$nom,$adresse,$ville,$codePostal){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this ->users->addUser($email,$mdp,$prenom,$nom,$adresse,$ville,$codePostal);

            $user = $this->users->getUserByEmail($email);
            $_SESSION['iduser'] = $user['id'];

            header('Location: http://localhost/twint/Twint-E-Sport/?page=viewMonCompte');
            exit();
        }else{
            header ('Location: http://localhost/twint/Twint-E-Sport/');
            exit();
        }
    }
    public function afficherSeConnecter(){
        if (empty($_SESSION['iduser'])){
            require "./views/viewSeConnecter.php";
        }else {
            header('Location: http://localhost/twint/Twint-E-Sport/');
        }
    }
    public function connexion() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupérer les informations d'identification soumises
            $email = $_POST['email'];
            $mdp = $_POST['mdp'];
            
            // Vérifier les informations d'identification dans une base de données
            $user = $this->users->getUserByEmail($email);

            if(is_array($user)){
                if ($user !== null && $mdp == $user['mdp']) {
                    $_SESSION['iduser'] = $user['id'];
                    
                    // Rediriger l'utilisateur vers la page d'accueil
                    header('Location: http://localhost/twint/Twint-E-Sport/?page=viewMonCompte');
                }else {
                    // Afficher un message d'erreur
                    echo 'Adresse e-mail ou mot de passe incorrect';
                }
            }else{
                echo "vous n'avez pas de compte sur ce site";
            }
        } else {
            // Afficher le formulaire de connexion
            header('Location: http://localhost/twint/Twint-E-Sport/?page=viewSeConnecter');
        }
    }
}
?>