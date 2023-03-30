<?php
require_once "classModel.php";

class User extends Model{

    public function addUser($email,$mdp,$prenom,$nom){
        $req0 = $this->getBdd()->prepare("INSERT INTO `users`(`email`, `mdp`, `prenom`, `nom`) VALUES (:email,:mdp,:prenom,:nom)");
        $req0->execute([
            'email'=>$email,
            'mdp'=>$mdp,
            'prenom'=>$prenom,
            'nom'=>$nom
        ]);
        return $newUser = $req0->fetch();
    }
    public function getUsers(){
        $req1 = $this->getBdd()->prepare("SELECT * FROM users");
        $req1->execute();
        return $users = $req1->fetchAll();
    }
    public function getUserByEmail(String $usremail){
        $req2 = $this->getBdd()->prepare("SELECT * FROM users WHERE email= :usremail");
        $req2->execute([
            'usremail' => $usremail
        ]);
        $data = $req2->fetch();
        return $data;
    }
    public function getUserById($iduser){
        $req3 = $this->getBdd()->prepare("SELECT * FROM users WHERE id= :iduser");
        $req3->execute([
            'iduser' => $iduser
        ]);
        $data = $req3->fetch();
        return $data;
    }
    public function modifyUser(Int $iduser, String $email, String $mdp, String $prenom, String $nom, String $adresse, String $ville, String $codePostal){
        $req4 = $this->getBdd()->prepare("UPDATE `users` SET `email`=:email ,`mdp`=:mdp ,`prenom`=:prenom ,`nom`=:nom ,`adresse`=:adresse ,`ville`=:ville ,`codePostal`=:codePostal WHERE id = :iduser");
        $req4->execute([
            'iduser' => $iduser,
            'email' => $email,
            'mdp' => $mdp,
            'prenom'=> $prenom,
            'nom'=> $nom,
            'adresse'=> $adresse,
            'ville'=> $ville,
            'codePostal'=> $codePostal,
        ]);
        return $newUser = $req4->fetch();
    }
}
?>