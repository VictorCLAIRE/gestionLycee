<?php
require_once "../models/CRUD/CRUDEleve.php";
require_once "../models/CRUD/CRUDProf.php";
require_once "../models/ClefEtrangere.php";

    function ReadAlleleves(){

        $ReadEleves = new CRUDEleve();
        $RealAllEleves = $ReadEleves->ReadAllEleves();
        require_once "../vues/eleves.php";

    }
    function ReadAllelevesJSON(){

        $ReadElevesJSON = new CRUDEleve();
        $RealAllElevesJSON = $ReadElevesJSON->ReadAllElevesJSON();
        require_once "../vues/elevesjson.php";

    }
    function CreateNewEleve(){

        require_once "../vues/neweleve.php";

        if (isset($_POST['btnNewEleve'])){
            $NewEleve = new CRUDEleve();
            $AddNewEleve = $NewEleve->AddNewEleve();
            $AddNewEleve;
            header("location:http://localhost/Projet_backfront/eleves");
        }
    }
    function ReadAllDetailEleve(){

    $DetailsEleveID = new CRUDEleve();
    $ReaddetailEleve = $DetailsEleveID->DetailsEleve();
    require_once "../vues/detailsEleve.php";
    return $ReaddetailEleve;

    }

    function DeleteEleve(){

        $DetailsEleveID = new CRUDEleve();
        $ReaddetailEleve = $DetailsEleveID->DetailsEleve();

        if (isset($_POST['btnDeleteEleve'])){
            $DeleteEleveID = new CRUDEleve();
            $DeleteEleve = $DeleteEleveID->DeleteEleve();
            $DeleteEleve;
            header("location:http://localhost/Projet_backfront/eleves");
        }
        require_once "../vues/supprimerEleve.php";
    }


    function ReadAllprofesseur(){

         $ReadProfesseur = new CRUDProf();
         $RealAllProfesseur = $ReadProfesseur->ReadAllProfesseurs();

         require_once "../vues/profs.php";

    }
    function ReadAllprofesseursJSON(){

        $ReadProfesseursJSON = new CRUDProf();
        $ReadAllProfesseursJSON = $ReadProfesseursJSON->ReadAllProfesseursJSON();
        require_once "../vues/professeursjson.php";

    }
    function CreateNewProf(){

        require_once "../vues/newprof.php";

        if (isset($_POST['btnNewProf'])){
            $NewProf = new CRUDProf();
            $AddNewProf = $NewProf->AddNewProf();
            $AddNewProf;
            header("location:http://localhost/Projet_backfront/professeurs");
        }
    }
    function ReadAllDetailprofesseur(){

        $CRUDPROF = new CRUDProf();
        $ReaddetailProfesseur = $CRUDPROF->DetailsProfesseur();
        require_once "../vues/detailsProfesseur.php";
        return $ReaddetailProfesseur;

    }
    function DeleteProfesseur(){

    $CRUDPROF = new CRUDProf();
    $ReaddetailProfesseur = $CRUDPROF->DetailsProfesseur();

    if (isset($_POST['btnDeleteEleve'])){
        $CRUDPROF = new CRUDProf();
        $deleteProfesseur = $CRUDPROF->DeleteProfesseur();
        $deleteProfesseur;
        header("location:http://localhost/Projet_backfront/professeurs");
    }
    require_once "../vues/supprimerProfesseur.php";
}








