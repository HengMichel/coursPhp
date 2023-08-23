<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inscription</title>
</head>
<body>
    <?php include_once "nav.php"; ?>
    <div class="container">
        <form action="traitement.php" method="post" enctype="multipart/form-data">
            <div>
                <input type="text" name="email" placeholder="Votre email">
            </div>
            <div>
                <input type="text" name="pseudo" placeholder="Votre pseudo">
            </div>
            <div>
                <input type="password" name="mdp" placeholder="Votre mot de passe">
            </div>
            <div>
                <input type="password" name="confirm_mdp" placeholder="Comfirmer votre mdp">
            </div>
            <div>
                <input type="file" name="photo">
            </div>
            <div>
                <button name="valider">Inscription</button>
            </div>
        </form>
    </div>
</body>
</html>