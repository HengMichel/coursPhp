<?php
// session_start();
require_once "../inc/db_connection.php";
// ********************** pour la connexion *********************

if(isset($_POST["connection"])){
    $email = $_POST["email"];
    $mdp = $_POST["passwords"];
    // etablir la connexion avec la db
    $connect = dbConnexion();
    // preparer la requete
    $connexionRequest = $connect->prepare("SELECT * FROM user WHERE email = ?");
    // execution de la requete
    $connexionRequest->execute(array($email));
    // recupere le resultat de la requete
    $utilisateur = $connexionRequest->fetch(PDO::FETCH_ASSOC);//convertir le resultat de la requete en tableau pour le manipuler
    // echo"<pre>";
    // print_r($utilisateur);
    // echo"<pre>";

    if(empty($utilisateur)){ // si le tableau $utilisateur est vide
        // echo "Utilisateur inconnu...";
        $_SESSION["error"] = "Utilisateur inconnu...."; // ajouter le message d'erreur dans le tableau

        // NEED CHECK
        header("Location: security.php"); // rediriger vers connexion.php
    }else{ //sinon on verifie le mot de passe
        if(password_verify($mdp,$utilisateur["passwords"])){
            // creation des variables de session
            $_SESSION["id"] = $utilisateur["id_user"];
            $_SESSION["email"] = $utilisateur["email"];
    
            header("Location: ../accueil.php");
           
        }else{
            $_SESSION["error"] = "mot de passe incorrect";
            header("Location: ../connection.php");

          
          
        }
    }
}


