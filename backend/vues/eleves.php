<?php
require_once "../models/CRUD/CRUDEleve.php";
?>
<div>
    <div class="titreH1">
        <h1>Gestion des élèves</h1>
    </div>
    <div class="tableau">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Date de naissance</th>
                </tr>
            </thead>
            <?php
            foreach ($RealAllEleves as $row){
            ?>
                <tbody>
                <tr class="table-info">
                    <th scope="col"><?=$row['id_eleve']?></th>
                    <th scope="col"><?=$row['nom_eleve']?></th>
                    <th scope="col"><?=$row['prenom_eleve']?></th>
                    <th scope="col"><?=$row['date_naissance_eleve']?></th>
                </tr>
                </tbody>
            <?php
            }
            ?>

        </table>

    </div>
</div>
