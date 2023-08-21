<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="traitement_inscription.php" method="post">
        <label for="nom">Your full name</label>
        <br>
        <input type="text" id="nom" name="nom"  placeholder = "Your full name">
        <br><br>

        <label for="email">Your e-mail:</label>
        <br>
        <input type="email" id="email" name="email"  placeholder = "Your email">
        <br><br>

        <label for="mot_de_passe">Your password:</label>
        <br>
        <input type="password" id="mot_de_passe" name="mot_de_passe"  placeholder = "Your Password">
        <br><br>

        <label for="confirmer_mot_de_passe">Confirmed your password:</label>
        <br>
        <input type="password" id="confirmer_mot_de_passe" name="confirmer_mot_de_passe"  placeholder = "Confirmed your Password">
        <br><br>

        <input type="submit" value="Register" name="register" >
    </form>
</body>
</html>