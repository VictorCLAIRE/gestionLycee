<?php
$ideleve = $_GET['ID'];
require_once "../models/CRUD/CRUDEleve.php";
?>
<div>
    <div class="titreH1">
        <h1>Supprimer l'élèves ? </h1>
    </div>
    <div class="tableau">
        <table class="table table-hover">
            <tbody>
            <tr class="table-info">
                <th scope="col"><?=$ReaddetailEleve['id_eleve']?></th>
                <th scope="col"><?=$ReaddetailEleve['nom_eleve']?></th>
                <th scope="col"><?=$ReaddetailEleve['prenom_eleve']?></th>
                <th scope="col"><?=$ReaddetailEleve['date_naissance_eleve']?></th>
            </tr>
            </tbody>
        </table>
        <div>
            <form method="post">
                <button class="btn btn-lg btn-danger" type="submit" name="btnDeleteEleve"> Valider la suppression de l'élève</button>
            </form>
        </div>

    </div>
</div>
