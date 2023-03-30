<?php
require_once "./models/classAreaModel.php";


class ApiController {
  public $model;

  public function __construct() {
    $this->model = new AreaModel();
  }

  public function playerDatas() {
    $data = array();
    if (isset($_POST['name']) && $_POST['name']!=="" && $_POST['name']!==" ") {
      $données = $this->model->getDataPlayers();
      foreach ($données as $donnée){
        if (strpos($donnée['MatchName'],  ucfirst($_POST['name'])) !== false || strpos($donnée['MatchName'],  $_POST['name'])!== false ){
          array_push($data, $donnée);
        }
      }
    }else{
      $data = $this->model->getDataPlayers();
  }
  require_once('views/viewJoueurs.php');
  }

  public function vueJoueur($id){
    $data = $this->model->viewPlayer($id);
    require "views/viewJoueur.php";
}
}
