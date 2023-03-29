<?php
abstract class Model{
    private static $pdo;

    protected static function setBdd(){
        self::$pdo = new PDO("mysql:host=localhost;dbname=twintesport;port=3306charset=utf8","root","");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }
    public function getBdd(){
        if(self::$pdo===null){
            self::setBdd();
        }
        return self::$pdo;
    }
}
?>