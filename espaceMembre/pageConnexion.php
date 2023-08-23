<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Page de connexion</title>
</head>
<body>
    <form method="POST" action="traitementConnexion.php" enctype="multipart/form-data">
        <div>
            <h1>Page de connexion</h1>
            <input type="submit" class="co" name="co" value="Connexion">
            
            <br><br>
            <div>
                <label for="name"></label>
                <br>
                <input type="text" name="pseudo" placeholder="Your pseudo :" class="pseudo">
                <br>
            </div>
            <br>
            <div>
                <input type="password" name="mdp" placeholder="Your password :" class="mdp"><br>
            </div>
            <br>
             <br><br>
             <input type="submit" class="co2" name="co" value="Connexion">
        </div>
    </form>
</body>
</html>