<?php
session_start();

// inclure le fichier database qui contient la fonction permettant de se connecter à la base de données 
require_once("../inc/db_connection.php");
// require_once("./inc/function.php");

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
// debug($_POST);



   
    
