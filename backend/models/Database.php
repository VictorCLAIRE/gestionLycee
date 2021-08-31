<?php
class  Database{
    private $host = "localhost";
    private $dbname = "lycee_tartanpion";
    private $login = "root";
    private $mdp = "";

    public function getPDO(){
        try {
            $db = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";charset=utf8", $this->login, $this->mdp);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $db;
        }catch (PDOException $exception){
            echo("Erreur de connexion". $exception->getMessage());
            die();
        }
    }
}