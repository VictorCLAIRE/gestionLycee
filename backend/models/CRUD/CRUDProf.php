<?php
require_once "../models/Database.php";

class CRUDProf extends Database{

    public function ReadAllProfesseurs(){
        $db = $this->getPDO();
        $sql = "SELECT * FROM professeur INNER JOIN matiere ON professeur.matiere_professeur = matiere.id_matiere  
                                        ORDER BY id_professeur";
        $stmt = $db->query($sql);
        return $stmt;
    }
}