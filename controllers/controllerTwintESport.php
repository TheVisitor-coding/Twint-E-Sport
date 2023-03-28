<?php
require_once "./models/classArticles.php";
require_once "./models/classUsers.php";

class TwintESportController{
    private $articles;
    private $users;

    public function __construct(){
        $this->articles = new Articles;
        $this->users = new User;
    }

    public function displayAccueil(){
        $afficherArticles = $this->articles->chargementArticles();
        require "./views/viewAccueil.php";
    }
    public function displayArticle($id){
        $article = $this->articles->recupererArticle($id);
        require "./views/viewArticlesDetails.php";
    }
    public function displayUser(){
        if (!empty($_SESSION['iduser'])){
            $iduser = $_SESSION['iduser'];
            $user = $this->users->getUserById($iduser);
            require "./views/viewCompte.php";
        }else{
            header ('Location: http://localhost/projets/Ann%C3%A9e%202/POO/exercice12-Projet/');
            exit();
        }
    }
    public function modifyContent(){
        if (!empty($_SESSION['iduser'])){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $this->users->modifyUser($iduser, $_POST['email'], $_POST['mdp'], $_POST['prenom'], $_POST['nom'], $_POST['adresse'], $_POST['ville'], $_POST['codePostal']);
                header ('Location: http://localhost/projets/Ann%C3%A9e%202/POO/exercice12-Projet/?page=viewMonCompte');
                exit();
            }else{
                header ('Location: http://localhost/projets/Ann%C3%A9e%202/POO/exercice12-Projet/');
                exit();
            }
        }else{
            header ('Location: http://localhost/projets/Ann%C3%A9e%202/POO/exercice12-Projet/');
            exit();
        }
    }
    public function seDeconnecter(){
        unset($_SESSION['iduser']);

        session_unset();
        session_destroy();

        header('Location: http://localhost/projets/Ann%C3%A9e%202/POO/exercice12-Projet/');
        exit();
    }
    public function displayAddUser(){
        if (empty($_SESSION['iduser'])){
            require './views/viewAddUser.php';
        }else{
            header ('Location: http://localhost/projets/Ann%C3%A9e%202/POO/exercice12-Projet/');
            exit();
        }
    }
    public function addUser($email,$mdp,$prenom,$nom,$adresse,$ville,$codePostal){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this ->users->addUser($email,$mdp,$prenom,$nom,$adresse,$ville,$codePostal);

            $user = $this->users->getUserByEmail($email);
            $_SESSION['iduser'] = $user['id'];

            header('Location: http://localhost/projets/Ann%C3%A9e%202/POO/exercice12-Projet/?page=viewMonCompte');
            exit();
        }else{
            header ('Location: http://localhost/projets/Ann%C3%A9e%202/POO/exercice12-Projet/');
            exit();
        }
    }
    public function afficherSeConnecter(){
        if (empty($_SESSION['iduser'])){
            require "./views/viewSeConnecter.php";
        }else {
            header('Location: http://localhost/projets/Ann%C3%A9e%202/POO/exercice12-Projet/');
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
                    header('Location: http://localhost/projets/Ann%C3%A9e%202/POO/exercice12-Projet/?page=viewMonCompte');
                }else {
                    // Afficher un message d'erreur
                    echo 'Adresse e-mail ou mot de passe incorrect';
                }
            }else{
                echo "vous n'avez pas de compte sur ce site";
            }
        } else {
            // Afficher le formulaire de connexion
            header('Location: http://localhost/localhost/projets/Ann%C3%A9e%202/POO/exercice12-Projet/?page=viewSeConnecter');
        }
    }
}
?>