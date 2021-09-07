<?php
session_start();

//REQUIRE CONTROLLERS
require_once "../controllers/VisitorController.php";
require_once "../controllers/AdminController.php";

ob_start();

//BASE
if (isset($_GET['url'])) {
    $url = $_GET['url'];
} else {
    $url = "accueil";
}

// ROUTES
if ($url === "accueil" || $url == "") {
    $title = "Accueil lycée Tartanpion";
    require_once "accueil.php";

}elseif ($url ==="connexion"){
    $title = "connexion";
    if (isset($_SESSION['connecte']) == false){
        require_once "../vues/connexion.php";
    }else{
        header("location:dashboard");
    }

}elseif ($url ==="deconnexion"){
    $title = "deconnexion";
    require_once "../vues/deconnexion.php";

}elseif ($url ==="eleves"){
    $title = "eleves";
    if (isset($_SESSION['connecte']) == true){
    ReadAlleleves();
    }else{
        header("location:connexion");
    }

}elseif ($url ==="elevesjson"){
    $title = "elevesjson";
    if (isset($_SESSION['connecte']) == true){
    ReadAllelevesJSON();
    }else{
        header("location:connexion");
    }

}elseif ($url ==="neweleve"){
    $title = "neweleve";
    if (isset($_SESSION['connecte']) == true){
        CreateNewEleve();
    }else{
        header("location:connexion");
    }

}elseif (($url ==="detailsEleve")&& isset($_GET['ID']) && $_GET['ID']>0){
    $title = "detailseleve";
    if (isset($_SESSION['connecte']) == true){
        ReadAllDetailEleve();
    }else{
        header("location:connexion");
    }

}elseif (($url ==="supprimerEleve")&& isset($_GET['ID']) && $_GET['ID']>0){
    $title = "deleteeleve";
    if (isset($_SESSION['connecte']) == true){
        DeleteEleve();
    }else{
        header("location:connexion");
    }

}elseif ($url ==="professeurs"){
    $title = "professeurs";
    if (isset($_SESSION['connecte']) == true){
    ReadAllprofesseur();
    }else{
        header("location:connexion");
    }

}elseif ($url ==="professeursjson"){
    $title = "professeursjson";
    if (isset($_SESSION['connecte']) == true){
        ReadAllprofesseursJSON();
    }else{
        header("location:connexion");
    }

}elseif ($url ==="newprof"){
    $title = "newprofesseurs";
    if (isset($_SESSION['connecte']) == true){
        CreateNewProf();
    }else{
        header("location:connexion");
    }

}elseif (($url ==="detailsProfesseur")&& isset($_GET['ID']) && $_GET['ID']>0){
    $title = "detailsprofesseur";
    if (isset($_SESSION['connecte']) == true){
        ReadAllDetailprofesseur();
    }else {
        header("location:connexion");
    }
}elseif (($url ==="supprimerProfesseur")&& isset($_GET['ID']) && $_GET['ID']>0){
    $title = "deleteprof";
    if (isset($_SESSION['connecte']) == true){
        DeleteProfesseur();
    }else{
        header("location:connexion");
    }

}elseif ($url ==="dashboard"){
    $title = "dashboard";
    if (isset($_SESSION['connecte']) == true){
        require_once "../vues/dashboard.php";
    }else{
        header("location:connexion");
    }

}else{
    $title = "Erreur 404";
    require_once "../vues/404.php";
}


$content = ob_get_clean();

require_once "template.php";

