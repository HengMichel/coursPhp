<?php
session_start();// a mettre avant le html pour demarrer une session
if(!isset($_SESSION["id"])){ //verifie si la session est active
    header("Location: connexion.php");// redirige vers le formulaire de connexion
}
?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <?php include_once "nav.php"; ?>
</body>
</html>