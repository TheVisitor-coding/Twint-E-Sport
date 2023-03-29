<?php
require_once "classModel.php";

class Video extends Model{
    public function getLives(){
        $req1 = $this->getBdd()->prepare("SELECT * FROM videos WHERE `live`=true");
        $req1->execute();
        return $articles = $req1->fetchAll();
    }
    public function getReplays(){
        $req2 = $this->getBdd()->prepare("SELECT * FROM videos WHERE `live`=false");
        $req2->execute();
        return $articles = $req2->fetchAll();
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