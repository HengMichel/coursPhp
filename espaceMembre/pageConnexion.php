<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Page de connexion</title>
</head>
<body>
    <?php include_once "nav2.php"; ?>
    <form method="POST" action="traitement2.php" enctype="multipart/form-data">
    <?php if(isset($_SESSION["error"])){ ?>
        <p><?= $_SESSION["error"]; ?></p>
    <?php } unset($_SESSION["error"]); ?>

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