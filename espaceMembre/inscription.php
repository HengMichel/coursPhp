<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <form method="POST" action="traitement3.php" enctype="multipart/form-data">
        <div>
            <input type="submit" class="co" name="co" value="Connexion">
            <br><br>
            <div>
                <label for="email">E-Mail :</label>
                <br>
                <input type="email" name="email">
                <br>
            </div>
            <div>
                <label for="name">Pseudo</label>
                <br>
                <input type="text" name="pseudo">
                <br>
            </div>
            <br>
            <div>
                <input type="password" name="mdp" placeholder="Mot de Passe"><br>
            </div>
            <br>
            <div>
                <input type="password" name="confirmdp" placeholder="Confirme Mot de Passe"><br>
            </div>
            <br>
            <input type="file" name="image">
             <br><br>
            <input type="submit" class="envoi" name="inscription" value="Inscription">
        </div>
    </form>
</body>
</html>