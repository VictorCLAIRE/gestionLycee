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
    public function ReadAllProfesseurJSON(){
        $db = $this->getPDO();
        $sql = "SELECT * FROM professeur";

        $professeursArray = [];
        $professeur = $db->query($sql);
        if ($professeur){
            $i = 0 ;
            while ($row = $professeur->fetch(PDO::FETCH_ASSOC)){
                $professeursArray[$i]['id'] = $row['id_professeur'];
                $professeursArray[$i]['nom'] = $row['nom_professeur'];
                $professeursArray[$i]['prenom'] = $row['prenom_professeur'];
                $professeursArray[$i]['matiere'] = $row['matiere_professeur'];
                $i++;
            }
            echo json_encode($professeursArray, JSON_PRETTY_PRINT);
        }else{
            http_response_code(404);
        }
    }
    public function AddNewProf(){
        $db = $this->getPDO();
        $nameProf = $_POST['nameNewProf'];
        $prenomProf = $_POST['prenomNewProf'];
        $matiereProf = $_POST['matiereProf'];

        $sql = "INSERT INTO `professeur` (`nom_professeur`,`prenom_professeur`,`matiere_professeur`) VALUES (?,?,?)";

        $req = $db->prepare($sql);

        $req->bindParam(1,$nameProf);
        $req->bindParam(2,$prenomProf);
        $req->bindParam(3,$matiereProf);

        $req->execute();
    }
}