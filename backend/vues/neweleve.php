<div class="container m-2">
    <div class="titreH1">
        <h1>Ajout d'un nouvel élève :</h1>
    </div>
    <form method="post">
        <div class="form-group">
            <label for="nameNewEleve">Nom de l'élève</label>
            <input class="form-control" required type="text" id="nameNewEleve" name="nameNewEleve">
        </div>
        <div class="form-group">
            <label for="prenomNewEleve">Prénom de l'élève</label>
            <input class="form-control" required type="text" id="prenomNewEleve" name="prenomNewEleve">
        </div>
        <div class="form-group">
            <label for="dateEleve">Date de naissance de l'élève</label>
            <input class="form-control" required type="date" id="dateEleve" name="dateEleve">
        </div>
        <button class="btn btn-lg btn-primary" name="btnNewEleve" type="submit">Valider le nouvel élève</button>
    </form>
</div>
