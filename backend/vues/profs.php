<?php
require_once "../models/CRUD/CRUDProf.php";
require_once "../models/ClefEtrangere.php";

$lecture = new ClefEtrangere;
?>
<div>
    <div class="titreH1">
        <h1>Gestion des professeurs</h1>
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
            <?php
            foreach ($RealAllProfesseur as $row){
                ?>
                <tbody>
                <tr class="table-info">
                    <th scope="col"><?=$row['id_professeur']?></th>
                    <th scope="col"><?=$row['nom_professeur']?></th>
                    <th scope="col"><?=$row['prenom_professeur']?></th>
                    <th scope="col"><?=$row['nom_matiere']?></th>
                </tr>
                </tbody>
                <?php
            }
            ?>
        </table>
    </div>
</div>
