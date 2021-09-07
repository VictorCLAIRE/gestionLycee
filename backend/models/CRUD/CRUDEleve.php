<?php
    require_once "../models/Database.php";

    class CRUDEleve extends Database{

        public function ReadAllEleves(){
            $db = $this->getPDO();
            $sql = "SELECT * FROM eleves ORDER BY id_eleve";
            $stmt = $db->query($sql);
            return $stmt;
        }
        public function ReadAllElevesJSON(){
            $db = $this->getPDO();
            $sql = "SELECT * FROM eleves";

            $elevesArray = [];
            $eleve = $db->query($sql);
            if ($eleve){
                $i = 0 ;
                while ($row = $eleve->fetch(PDO::FETCH_ASSOC)){
                    $elevesArray[$i]['id'] = $row['id_eleve'];
                    $elevesArray[$i]['nom'] = $row['nom_eleve'];
                    $elevesArray[$i]['prenom'] = $row['prenom_eleve'];
                    $elevesArray[$i]['date_de_naissance'] = $row['date_naissance_eleve'];
                    $i++;
                }
                echo json_encode($elevesArray, JSON_PRETTY_PRINT);
            }else{
                http_response_code(404);
            }
        }
        public function AddNewEleve(){
            $db = $this->getPDO();
            $nameEleve = $_POST['nameNewEleve'];
            $prenomEleve = $_POST['prenomNewEleve'];
            $dateEleve = $_POST['dateEleve'];

            $sql = "INSERT INTO `eleves` (`nom_eleve`,`prenom_eleve`,`date_naissance_eleve`) VALUES (?,?,?)";

            $req = $db->prepare($sql);

            $req->bindParam(1,$nameEleve);
            $req->bindParam(2,$prenomEleve);
            $req->bindParam(3,$dateEleve);

            $req->execute();
        }
        public function DetailsEleve(){

            $ideleve = $_GET['ID'];

            $db = $this->getPDO();
            $sql = "SELECT * FROM eleves WHERE id_eleve = ?";

            $req = $db->prepare($sql);

            $req->bindParam(1,$ideleve);

            $req->execute();
            $res=$req->fetch(PDO::FETCH_ASSOC);
            return $res;

        }
        public function DeleteEleve(){

            $ideleve = $_GET['ID'];
            $db = $this->getPDO();

            $sql = "DELETE FROM `eleves` WHERE `id_eleve` = ?";

            $req = $db->prepare($sql);

            $req->bindParam(1,$ideleve);
            $req->execute();
        }
    }