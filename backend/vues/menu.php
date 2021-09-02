
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <a class="navbar-brand" >Le mauvais coin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a class="nav-link" href="accueil">Accueil</a></li>
            <?php
            if (isset($_SESSION['connecte']) == false){
            ?>
                <li class="nav-item active"><a class="nav-link" href="connexion">Connexion</a></li>
            <?php
            }
            else if (isset($_SESSION['connecte']) == true){
                ?>
                <li class="nav-item active"><a class="nav-link" href="dashboard">Dashboard</a></li>
                <li class="nav-item active"><a class="nav-link" href="#"><?=$_SESSION['login']?></a></li>
                <li class="nav-item active"><a class="nav-link" href="professeurs">Gestion des profs</a></li>
                <li class="nav-item active"><a class="nav-link" href="eleves">Gestions des élèves</a></li>
                <li class="nav-item active"><a class="nav-link" href="deconnexion">Déconnexion</a></li>
                <?php
            }
            ?>

        </ul>
    </div>
</nav>