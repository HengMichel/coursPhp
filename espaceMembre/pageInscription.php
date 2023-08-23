<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Page d'inscription</title>
</head>
<body>
    <form method="POST" action="traitement3.php" enctype="multipart/form-data">
        <div>
            <h1>Page d'inscription</h1>
            <input type="submit" class="co" name="co" value="Connexion">
            <br><br>
            <div>
                <label for="email"></label>
                <br>
                <input type="email" name="email" placeholder="Your email :" class="email">
                <br>
            </div>
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
            <div>
                <input type="password" name="confirmdp" placeholder="Confirm your password" class="confirmdp"><br>
            </div>
            <br>
            <input type="file" name="image" class="image">
             <br><br>
            <input type="submit" class="envoi" name="inscription" value="Inscription">
        </div>
    </form>
</body>
</html>