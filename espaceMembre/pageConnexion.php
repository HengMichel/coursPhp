<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Page de connexion</title>
</head>
<body>
    <?php include_once "nav.php"; ?>
    <form method="POST" action="traitementConnexion.php" enctype="multipart/form-data">
        <h1>Page de connexion</h1>
        <div>
            <div>
                <input type="text" name="pseudo" placeholder="Your pseudo :" class="pseudo">
            </div>
            <div>
                <input type="password" name="mdp" placeholder="Your password :" class="mdp">
            </div>
            <div>
                <button name="co" class="co">Connexion
                </button>
            </div>
        </div>
    </form>
</body>
</html>