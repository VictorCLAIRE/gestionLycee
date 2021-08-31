<?php
    require_once "../models/CONNEXION/Connexion.php";
    $loginConnexion = new Connexion();
?>

<div class="titrePage">
    <h1> Fomulaire de connexion</h1>
</div>
<div class="container">
    <form method="post">
        <div class="form-group">
            <label for="formlogin" class="form-label mt-4">Login</label>
            <input type="text" class="form-control" id="login" name="login" placeholder="Login">
        </div>
        <div class="form-group">
            <label for="formpassword" class="form-label mt-4">Password</label>
            <input type="text" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <div class=" text-center">
            <button class="btn btn-lg btn-success m-2" type="submit" value="connexion_user" name="connexion">Connexion</button>
        </div>
    </form>
    <?php
    if(isset($_POST['connexion'])){
        $loginConnexion->VerificationConnexion();
    }
    ?>
</div>
