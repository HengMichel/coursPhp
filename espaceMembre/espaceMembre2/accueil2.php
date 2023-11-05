<?php
// a mettre avant le html pour demarrer une session
session_start();
require_once "fonction2.php";

if(!isset($_SESSION["id"])){ //verifie si la session est active
    header("Location: pageConnexion.php");// redirige vers le formulaire de connexion
}
// recupere la liste des posts
$listPost = getPost();
echo"<pre>";
print_r($listPost);
echo"<pre>";
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
    <div class="container">
        <?php foreach($listPost as $post){ ?>
            <div class="post">
                <div class="postimg">
                    <img src="images2/<?= $post["photo"]; ?>" alt="image">
                </div>
                <p><?= $post["text"]; ?></p>
                <span><?= $post["likes"]; ?></span>
            </div>
        <?php } ?>
</html>