<?php
    require_once "../models/Database.php";

    class CRUDEleve extends Database{

        public function ReadAllEleves(){
            $db = $this->getPDO();
            $sql = "SELECT * FROM eleves ORDER BY id_eleve";
            $stmt = $db->query($sql);
            return $stmt;
        }
    }