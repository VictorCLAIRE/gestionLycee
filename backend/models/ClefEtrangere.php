<?php

require_once "../models/Database.php";

class ClefEtrangere extends Database {

    public function LectureMatiere(){

        $db = $this->getPDO();
        $req = $db->query("SELECT * FROM matiere");

        foreach ($req as $row){
            ?>
            <option value="<?= $row['id_matiere']?>"><?= $row['nom_matiere']?></option>
        <?php
        }
    }
}