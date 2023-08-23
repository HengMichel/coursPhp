<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Page d'inscription</title>
</head>
<body>
    <?php include_once "nav.php"; ?>
    <div>
        <h1>Page d'inscription</h1>
        <form method="POST" action="traitementInscription.php" enctype="multipart/form-data">
            <!-- <input type="submit" class="co" name="co" value="Connexion"> -->
            <div>
                <input type="email" name="email" placeholder="Your email :" class="email">
                <br>
            </div>
            <div>
                <input type="text" name="pseudo" placeholder="Your pseudo :" class="pseudo">
            </div>
            <div>
                <input type="password" name="mdp" placeholder="Your password :" class="mdp"><br>
            </div>
            <div>
                <input type="password" name="confirmdp" placeholder="Confirm your password :" class="confir_mdp">
            </div>
            <div>
                <input type="file" name="image" class="image">
            </div>
            <div class="inscription">
                <button
                name="valider">Inscription
                </button>
            </div>
        </form>
    </div>
</body>
</html>