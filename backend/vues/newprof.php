<?php
require_once "../models/ClefEtrangere.php";
$lecture = new ClefEtrangere()
?>
<div class="container m-2">
    <div class="titreH1">
        <h1>Ajout d'un nouveau prof :</h1>
    </div>
    <form method="post">
        <div class="form-group">
            <label for="nameNewProf">Nom du prof</label>
            <input class="form-control" required type="text" id="nameNewProf" name="nameNewProf">
        </div>
        <div class="form-group">
            <label for="prenomNewProf">Prénom du prof</label>
            <input class="form-control" required type="text" id="prenomNewProf" name="prenomNewProf">
        </div>
        <div class="form-group">
            <label for="matiereProf">Matiere du prof</label>
            <select class="form-control" type="text" name="matiereProf" id="matiereProf">
                <option></option>
            <?php
            $lecture->LectureMatiere();
            ?>>
            </select>
        </div>
        <div class="text-center m-2">
            <button class="btn btn-lg btn-primary" name="btnNewProf" type="submit">Valider le nouveau prof</button>
        </div>
    </form>
</div>
