<?php
require_once "../models/CRUD/CRUDEleve.php";
require_once "../models/CRUD/CRUDProf.php";
require_once "../models/ClefEtrangere.php";

    function ReadAlleleves(){

        $ReadEleves = new CRUDEleve();
        $RealAllEleves = $ReadEleves->ReadAllEleves();
        require_once "../vues/eleves.php";

    }
    function ReadAllprofesseur(){

        $ReadProfesseur = new CRUDProf();

        $RealAllProfesseur = $ReadProfesseur->ReadAllProfesseurs();

        require_once "../vues/profs.php";

    }

