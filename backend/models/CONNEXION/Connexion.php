<?php
 require_once "../models/Database.php";

 class Connexion extends Database{

     public function VerificationConnexion(){
         $db = $this->getPDO();

         if(!empty($_POST['login']) && !empty($_POST['password'])){

             $sql = "SELECT * FROM admin WHERE login_admin = ? AND password_admin = ?";

             $req = $db->prepare($sql);
             $req->bindParam(1, $_POST['login']);
             $req->bindParam(2, $_POST['password']);

             $req->execute();
             $row=$req->fetch(PDO::FETCH_ASSOC);

             if (($_POST['login'] == $row['login_admin']) && ($_POST['password'] == $row['password_admin'])){

                 session_start();
                 $_SESSION['connecte'] = true;
                 $_SESSION['login'] = $row['login_admin'];
                 header("location:http://localhost/Projet_backfront/dashboard");
             }else{
                 echo "login or password false";
             }
         }else{
             echo "Merci de remplir tous les champs";
         }
     }
 }