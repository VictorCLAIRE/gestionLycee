<?php

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
    require_once "../vues/connexion.php";

}elseif ($url ==="eleves"){
    $title = "eleves";
    ReadAlleleves();

}elseif ($url ==="professeurs"){
    $title = "professeurs";
    ReadAllprofesseur();

}else{
    $title = "Erreur 404";
    require_once "../vues/404.php";
}

$content = ob_get_clean();

require_once "template.php";
