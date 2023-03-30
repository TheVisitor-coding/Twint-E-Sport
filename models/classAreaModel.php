<?php
class AreaModel {
  
  private $url = 'https://api.sportsdata.io/v3/lol/scores/json/Players?key=2a289f56494740f68d66502353d729e1';

  public function getDataPlayers() {
    $data = json_decode(file_get_contents($this->url), true);
    return $data;
  }

  public function viewPlayer($id){
    $url_id = "https://api.sportsdata.io/v3/lol/scores/json/Player/{$id}?key=2a289f56494740f68d66502353d729e1";
    $data = json_decode(file_get_contents($url_id), true);
    return $data;
}
}
