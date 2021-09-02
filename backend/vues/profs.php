<?php
require_once "../models/CRUD/CRUDProf.php";
?>
<div>
    <div class="titreH1">
        <h1>Gestion des professeurs</h1>
    </div>
    <div>
        <a href="newprof" class="btn btn-lg btn-info"> AJOUTER UN NOUVEAU PROF</a>
    </div>
    <div class="tableau">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Matière</th>
                <th scope="col">Détails</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
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
                    <th scope="col"><a class="btn btn-dark">Détails</a></th>
                    <th scope="col"><a class="btn btn-dark">Modifier</a></th>
                    <th scope="col"><a class="btn btn-warning">X</a></th>
                </tr>
                </tbody>
                <?php
            }
            ?>
        </table>
    </div>
</div>
