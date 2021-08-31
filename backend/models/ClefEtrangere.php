<?php

require_once "../models/Database.php";

class ClefEtrangere extends Database {

    public function LectureMatiere(){

        $db = $this-> $this->getPDO();
        $req = $db->query("SELECT * FROM matiere");

        $stmt = $db->query($req);
        return $stmt;
    }
}