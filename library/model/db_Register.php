<?php
// inclure le fichier database qui contient la fonction permettant de se connecter à la base de données 
require_once("../inc/function.php");
require_once("../inc/db_connection.php");
// debug($_GET,$_POST,$_FILES ,$_SERVER);

// echo "<pre>";
// var_dump($_POST);
// echo "<pre>";

if(isset($_POST["submit"])){

    // recup data

    $civility = htmlspecialchars($_POST["civility"]);
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $email = htmlspecialchars($_POST["email"]);
    $passwords = htmlspecialchars($_POST["passwords"]);
    // crypter le mot de passe hasher
    $mdpCrypt = password_hash($passwords,PASSWORD_DEFAULT);
    $country = htmlspecialchars($_POST["country"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $birthday = htmlspecialchars($_POST["birthday"]);
    $message = htmlspecialchars($_POST["messages"]);
    $conditions = htmlspecialchars($_POST["conditions"]);

    // il faut se connecter à la base de données
    //permet d'établir la connexion avec db
    $db = dbConnexion(); 

    // preparation de la requete

    $request = $db->prepare("INSERT INTO user (civility,firstname,lastname,email,passwords,country,phone,birthday,messages,conditions) VALUES (?,?,?,?,?,?,?,?,?,?)");

    // execution de la requete

    try {
        //essayer d'enregistrer les infos dans la table utilisateurs

        $request->execute(array($civility,$firstname,$lastname,$email,$mdpCrypt,$country,$phone,$birthday,$message,$conditions));
    } catch (PDOException $e) {

        // afficher l'erreur sql genere
        echo $e->getMessage();

    }
}else{
    echo "no regist in BD";
}
debug($_POST);

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
    echo"<pre>";
    print_r($utilisateur);
    echo"<pre>";

    if(empty($utilisateur)){ // si le tableau $utilisateur est vide
        echo "Utilisateur inconnu...";
    }else{ //sinon on verifie le mot de passe
        if(password_verify($mdp,$utilisateur["mdp"])){
            // creation des variables de session
            $_SESSION["id"] = $utilisateur["id_membre"];
            $_SESSION["pseudo"] = $utilisateur["pseudo"];
            $_SESSION["img"] = $utilisateur["profil_img"];

            header("Location: accueil.php");
            
        }else{
            echo "mot de passe incorrect";
            header("refresh:2;http://localhost/coursPhp/espaceMembre/pageConnexion.php");//retour a la page de depart
        }
    }
}