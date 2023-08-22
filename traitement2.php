<?php
// inclure le fichier database qui contient la fonction permettant de se connecter à la base de données 
require_once("database.php");
if(isset($_POST["envoi"])){
    // recup data
    $nom = htmlspecialchars( $_POST["nom"]);
    $prenom = htmlspecialchars( $_POST["prenom"]);
    $email = htmlspecialchars($_POST["email"]);
    $mdp = htmlspecialchars($_POST["mdp"]);
    // crypter le mot de passe hasher
    $mdpCrypt = password_hash($mdp,PASSWORD_DEFAULT); 
    // il faut se connecter à la base de données
    $db = dbConnexion(); //permet d'établir la connexion avec db
    // preparation de la requete
    $request = $db->prepare("INSERT INTO utilisateurs (nom,prenom,email,mdp) VALUES (?,?,?,?)");
    // execution de la requete
    try {//essayer d'enregistrer les infos dans la table utilisateurs
        $request->execute(array($nom,$prenom,$email,$mdpCrypt));
    } catch (PDOExeption $e) {
        echo $e->getMessage(); // afficher l'erreur sql genere
    }
}