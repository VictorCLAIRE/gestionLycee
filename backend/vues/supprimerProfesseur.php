<?php
$idpofesseur = $_GET['ID'];
require_once "../models/CRUD/CRUDProf.php";
?>
<div>
    <div class="titreH1">
        <h1>Supprimer le professeur ? </h1>
    </div>
    <div class="tableau">
        <table class="table table-hover">
            <tbody>
            <tr class="table-info">
                <th scope="col"><?=$ReaddetailProfesseur['id_professeur']?></th>
                <th scope="col"><?=$ReaddetailProfesseur['nom_professeur']?></th>
                <th scope="col"><?=$ReaddetailProfesseur['prenom_professeur']?></th>
                <th scope="col"><?=$ReaddetailProfesseur['nom_matiere']?></th>
            </tr>
            </tbody>
        </table>
        <div>
            <form method="post">
                <button class="btn btn-lg btn-danger" type="submit" name="btnDeleteEleve"> Valider la suppression du professeur</button>
            </form>
        </div>

    </div>
</div>
