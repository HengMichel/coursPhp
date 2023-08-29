<?php
session_start();
require_once "database.php";
if(isset($_POST["valider"])){ //c'est pour l'inscription
    $email = $_POST["email"];
    $pseudo = $_POST["pseudo"];
    $mdp = $_POST["mdp"];
    $mdpCrypt = password_hash($mdp,PASSWORD_DEFAULT);

    $imgName = $_FILES["photo"]["name"];
    $tmp = $_FILES["photo"]["tmp_name"];
    $destination = $_SERVER["DOCUMENT_ROOT"]."/coursPhp/espaceMembre/images2/".$imgName;

    move_uploaded_file($tmp,$destination);
    $conn = dbConnexion();
    $request = $conn->prepare("INSERT INTO membres (email,pseudo,mdp,profil_img) VALUES (?,?,?,?)");

    try {
        $request->execute(array($email,$pseudo,$mdpCrypt,$imgName));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

}

// ********************** pour la connexion *********************

if(isset($_POST["connexion"])){
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
        $_SESSION["error"] = "Utilisateur inconnu...."; // ajouter le message d'erreur dans le tableau
        header("Location: connexion.php"); // rediriger vers connexion.php
    }else{ //sinon on verifie le mot de passe
        if(password_verify($mdp,$utilisateur["mdp"])){
            // creation des variables de session
            $_SESSION["id"] = $utilisateur["id_membre"];
            $_SESSION["pseudo"] = $utilisateur["pseudo"];
            $_SESSION["img"] = $utilisateur["profil_img"];

            // creation du cookie qui va stoker l'identifiant de l'utilisateur pour permettre une meilleure experience
            // cad on va le connecter automatiquement apres verification du cookie
            setcookie("id_user", $utilisateur["id_membre"],time()+3600,'/', 'localhost',false,true );

            header("Location: accueil.php");
            
        }else{
            $_SESSION["error"] = "mot de passe incorrect";
            header("Location: connexion.php");
        }
    }
}

// pour la publication
if(isset($_POST["publier"])){
    $message = htmlspecialchars($_POST["message"]);

    $image_name = $_FILES["img"]["name"];
    $tmp = $_FILES["img"]["tmp_name"];
    $destination = $_SERVER["DOCUMENT_ROOT"]."/coursPhp/espaceMembre/images2/".$image_name;

     move_uploaded_file($tmp,$destination);

     // connexion a la bd
     $dbconnect = dbConnexion();
    //  preparation de la requete
    $request = $dbconnect->prepare("INSERT INTO posts (membre_id,photo,text) VALUES (?,?,?)");
    // execution de la requete
    try {
        $request->execute(array($_SESSION["id"],$image_name,$message));
        header("Location: accueil.php");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

if(isset($_GET["idpost"])){
    // connexion a la bd
    $dbconnect = dbConnexion();
    // prepare la requete
    $request = $dbconnect->prepare("SELECT likes FROM posts WHERE id_post = ?");
    // executer la requete
    $request->execute(array($_GET["idpost"]));
    // on recupere le resultat
    $likes = $request->fetch();

    echo $likes["likes"];
    // requete pour modifier le nombre de like
    $request1 = $dbconnect->prepare("UPDATE posts SET likes = ? WHERE id_post = ?");
    // executer la requete
    $request1->execute(array($likes["likes"]+1, $_GET["idpost"]));
    header("Location: accueil.php");
}