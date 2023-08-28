<?php
session_start();
// inclure le fichier database qui contient la fonction permettant de se connecter à la base de données 
require_once("database2.php");
if(isset($_POST["valider"])){
    // recup data
    $email = htmlspecialchars($_POST["email"]);
    $pseudo = htmlspecialchars( $_POST["pseudo"]);
    $mdp = htmlspecialchars($_POST["mdp"]);
    // crypter le mot de passe hasher
    $mdpCrypt = password_hash($mdp,PASSWORD_DEFAULT);
    // $confirmmdp = password_hash($confirmmdp,PASSWORD_DEFAULT);
    // il faut se connecter à la base de données
    $db = dbConnexion(); //permet d'établir la connexion avec db

    $imgName = $_FILES["image"]["name"];
    // loc temporaire server
    $tmpName = $_FILES["image"]["tmp_name"];
    $destination = $_SERVER["DOCUMENT_ROOT"]."/coursPhp/espaceMembre/images2/".$imgName;
    echo $destination;
    move_uploaded_file($tmpName,$destination);


    // preparation de la requete
    $request = $db->prepare("INSERT INTO membres (email,pseudo,mdp,profil_img) VALUES (?,?,?,?)");
    // execution de la requete
    try {//essayer d'enregistrer les infos dans la table utilisateurs
        $request->execute(array($email,$pseudo,$mdpCrypt,$imgName));
    } catch (PDOException $e) {
        echo $e->getMessage(); // afficher l'erreur sql genere
    }
}

// ********************** for connexion *********************

if(isset($_POST["co"])){
    $pseudo = $_POST["pseudo"];
    $mdp = $_POST["mdp"];
    // etablir la connexion avec la db
    $connect = dbConnexion();
    // preparer la requete
    $connexionRequest = $connect->prepare("SELECT * FROM membres WHERE pseudo = ?");
    // execution de la requete
    $connexionRequest->execute(array($pseudo));
    // recupere le resultat de la requete
    $utilisateur = $connexionRequest->fetch(PDO::FETCH_ASSOC);//convertir le resultat de la requete en tableau pour le manipuler
    // echo"<pre>";
    // print_r($utilisateur);
    // echo"<pre>";

    if(empty($utilisateur)){ // si le tableau $utilisateur est vide
        // echo "Utilisateur inconnu...";
        $_SESSION["error"] = "Utilisateur inconnu..."; // ajouter le message d'erreur dans le tableau
        header("Location: pageConnexion.php"); // rediriger vers pageConnexion.php
    }else{ //sinon on verifie le mot de passe
        if(password_verify($mdp,$utilisateur["mdp"])){
            // creation des variables de session
            $_SESSION["id"] = $utilisateur["id_membre"];
            $_SESSION["pseudo"] = $utilisateur["pseudo"];
            $_SESSION["img"] = $utilisateur["profil_img"];

            header("Location: accueil2.php");
            
        }else{
            $_SESSION["error"] = "mot de passe incorrect";
            header("Location: pageConnexion.php");        }
    }
}