<?php
// inclure le fichier database qui contient la fonction permettant de se connecter à la base de données 
require_once("database2.php");
if(isset($_POST["inscription"])){
    // recup data
    $email = htmlspecialchars($_POST["email"]);
    $pseudo = htmlspecialchars( $_POST["pseudo"]);
    $mdp = htmlspecialchars($_POST["mdp"]);
    // crypter le mot de passe hasher
    $mdpCrypt = password_hash($mdp,PASSWORD_DEFAULT);
    // $confirmmdp = password_hash($confirmmdp,PASSWORD_DEFAULT);
    // il faut se connecter à la base de données
    $db = dbConnexion(); //permet d'établir la connexion avec db

    echo"<pre>";
    print_r($_FILES);
    echo"</pre>";
    // name img
    $imgName = $_FILES["image"]["name"];
    // loc temporaire server
    $tmpName = $_FILES["image"]["tmp_name"];
    $destination = $_SERVER["DOCUMENT_ROOT"]."/coursPhp/images/".$imgName;
    echo $destination;
    move_uploaded_file($tmpName,$destination);


    // preparation de la requete
    $request = $db->prepare("INSERT INTO utilisateurs (email,pseudo,mdp) VALUES (?,?,?,?)");
    // execution de la requete
    try {//essayer d'enregistrer les infos dans la table utilisateurs
        $request->execute(array($nom,$prenom,$email,$mdpCrypt,$image));
    } catch (PDOExeption $e) {
        echo $e->getMessage(); // afficher l'erreur sql genere
    }
}