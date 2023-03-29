<?php
require_once "classModel.php";

class Match extends Model{
    public function getMatches(){
        $req1 = $this->getBdd()->prepare("SELECT * FROM matches");
        $req1->execute();
        return $articles = $req1->fetchAll();
    }
    public function recupererArticle(int $id){
        $req2 = $this->getBdd()->prepare("SELECT * FROM article WHERE id=:id");
        $req2->execute([
            'id' => $id
        ]);
        $data = $req2->fetch();
        return $data;
    }
}
?>