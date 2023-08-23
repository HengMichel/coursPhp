<?php
// inclure le fichier database qui contient la fonction permettant de se connecter à la base de données 
require_once("database2.php");
if(isset($_POST["pageConnexion"])){
    // recup data
    $pseudo = htmlspecialchars( $_POST["pseudo"]);
    $mdp = htmlspecialchars($_POST["mdp"]);
   
    $db = dbConnexion(); //permet d'établir la connexion avec db
    // preparation de la requete de lecture
    $request = $db->prepare("SELECT * FROM membres WHERE pseudo = ?" );
    // execution de la requete
    try {//essayer d'enregistrer les infos dans la table utilisateurs
        $request->execute(array($pseudo,$mdpCrypt));
    } catch (PDOExeption $e) {
        echo $e->getMessage(); // afficher l'erreur sql genere
    }
}