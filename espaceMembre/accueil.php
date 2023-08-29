<?php
// a mettre avant le html pour demarrer une session
session_start();
require_once "fonction.php";

if(!isset($_COOKIE["id_user"])){ //verifie si la session est active
    header("Location: connexion.php");// redirige vers le formulaire de connexion
}
// recupere la liste des posts
$listPost = getPost();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <title>Accueil</title>
</head>
<body>
    <?php include_once "nav.php"; ?>
    <div class="container">
        <?php foreach($listPost as $post){ ?>
            <div class="post">
                <div class="postimg">
                    <img src="images2/<?= $post["photo"]; ?>" alt="image">
                </div>
                <p><?= $post["text"]; ?></p>
                <span><?= $post["likes"]; ?></span>
                <a href="traitement.php?idpost=<?= $post["id_post"];?>" class="heart">likes
                <i class="fa-sharp fa-solid fa-heart fa-beat"></i>
                </a>
            </div>
        <?php } ?>
    </div>
</body>
</html>