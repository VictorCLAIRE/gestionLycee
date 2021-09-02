    <div class="text-center">
        <h1>Accueil au lycée Tartanpion</h1>
    </div>
    <div class="row text-center">
        <div class="col-6">
            <h4>Élèves</h4>
            <div class="tableau">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Date de naissance</th>
                        <th scope="col">Détails</th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr class="table-info">
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"><a href="" class="btn btn-dark">Détails</a></th>
                            <th scope="col"><a class="btn btn-dark">Modifier</a></th>
                            <th scope="col"><a class="btn btn-warning">X</a></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-6">
            <h4>Professeurs</h4>
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
                    <tbody>
                        <tr class="table-info">
                            <th scope="col">{{eleve.nom}}</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"><a class="btn btn-dark">Détails</a></th>
                            <th scope="col"><a class="btn btn-dark">Modifier</a></th>
                            <th scope="col"><a class="btn btn-warning">X</a></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>