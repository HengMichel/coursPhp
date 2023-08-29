<?php
require_once "database.php";
//  pour recuper la liste des posts
function getPost(){
    $lesPosts = null;
    $dbconnect = dbConnexion(); // connexion a la bd
    // preparation de la requete
    // $request = $dbconnect->prepare("SELECT id_post,likes,membre_id,text,photo FROM posts WHERE membre_id IN (SELECT * FROM membres)");
    // ou
    $request = $dbconnect->prepare("SELECT id_post,likes,membre_id,text,photo,id_membre,pseudo FROM posts,membres WHERE posts.membre_id = membres.id_membre");
    // execution de la requete
    try {
        $request->execute();
        // transformer le resultat de la requete en tableau
        $lesPosts = $request->fetchAll();
    } catch (PDOException $e) {
        $lesPosts = $e->getMessage();
    }
    return $lesPosts; // retourne la liste des posts
}