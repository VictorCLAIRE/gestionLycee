<?php
require_once "../models/CRUD/CRUDProf.php";
?>

<div class="text-center">
    <h1>DASHBOARD</h1>
</div>
<a class="btn btn-success" href="http://localhost/projet_backfront/backend/vues/elevesjson.php">JSON eleve</a>
<a class="btn btn-success" href="http://localhost/projet_backfront/backend/vues/professeursjson.php">JSON prof</a>
<div class="row text-center">
    <div class="col-6">
        <h4>Gestion du fichier de ressource des élèves</h4>
        <a class="btn btn-lg btn-info m-2" href="eleves">Eleves</a>
    </div>
    <div class="col-6">
        <h4>Gestion du fichier de ressource des professeurs</h4>
        <a class="btn btn-lg btn-info m-2" href="professeurs">Professeurs</a>
    </div>
</div>