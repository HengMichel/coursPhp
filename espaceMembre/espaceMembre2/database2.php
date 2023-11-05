<?php
function dbConnexion(){
    $connexionDb = null;//  variable stock notre instance de connexion à la base de données
    // essayer de se se connecte a la base de données
    try{// recupère l'objet de connexion à la base de donnés dans la variable $connexionDb
        $connexionDb = new PDO("mysql:host=localhost;dbname=cours_db","root","");// si la connexion echoue       
    }catch(PDOException $e){// recupère notre erreur dans $connexionDb
        $connexionDb = $e->getMessage();
    }
    return $connexionDb;// returne l'objet de connexion ou une erreur
}