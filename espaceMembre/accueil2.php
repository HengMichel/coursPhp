<?php
session_start();// a mettre avant le html pour demarrer une session
if(!isset($_SESSION["id"])){ //verifie si la session est active
    header("Location: pageConnexion.php");// redirige vers le formulaire de connexion
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Accueil</title>
</head>
<body>
    <?php include_once "nav2.php"; ?>
</body>
</html>