<?php
$ideleve = $_GET['ID'];
require_once "../models/CRUD/CRUDEleve.php";
?>
<div>
    <div class="titreH1">
        <h1>DETAIL élèves</h1>
    </div>
    <div class="tableau">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Date de naissance</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-info">
                    <th scope="col"><?=$ReaddetailEleve['id_eleve']?></th>
                    <th scope="col"><?=$ReaddetailEleve['nom_eleve']?></th>
                    <th scope="col"><?=$ReaddetailEleve['prenom_eleve']?></th>
                    <th scope="col"><?=$ReaddetailEleve['date_naissance_eleve']?></th>
                    <th scope="col"><a class="btn btn-dark">Modifier</a></th>
                    <th scope="col"><a class="btn btn-warning">X</a></th>
                </tr>
            </tbody>

        </table>

    </div>
</div>
