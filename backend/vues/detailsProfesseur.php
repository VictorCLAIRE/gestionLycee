<?php
$ideleve = $_GET['ID'];
require_once "../models/CRUD/CRUDProf.php";
?>
<div>
    <div class="titreH1">
        <h1>DETAIL Prof</h1>
    </div>
    <div class="tableau">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Matière</th>

            </tr>
            </thead>
            <tbody>
            <tr class="table-info">
                <th scope="col"><?=$ReaddetailProfesseur['id_professeur']?></th>
                <th scope="col"><?=$ReaddetailProfesseur['nom_professeur']?></th>
                <th scope="col"><?=$ReaddetailProfesseur['prenom_professeur']?></th>
                <th scope="col"><?=$ReaddetailProfesseur['nom_matiere']?></th>
            </tr>
            </tbody>

        </table>

    </div>
</div>
