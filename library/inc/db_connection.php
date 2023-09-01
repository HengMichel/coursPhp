<!-- ***************  DATABASE***************** -->


<?php
function dbConnexion()
{
    $connexionDb = null;
    $host = "localhost";
    $dbName = "library";
    $identify = "root";
    $passeword ="";

    try{// recupère l'objet de connexion à la base de donnés dans la variable $connexionDb
        $connexionDb = new PDO("mysql:host=$host;dbname=$dbName",$identify,$passeword);// si la connexion echoue       
    }catch(PDOException $e) {// recupère notre erreur dans $connexionDb
        $connexionDb = $e->getMessage();
    }
    return $connexionDb;// returne l'objet de connexion ou une erreur
}
