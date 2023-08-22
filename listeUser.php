<?php
require_once "database.php";
// etablir la connexion avec la base de donnees
$db = dbConnexion();
$request = $db->prepare("SELECT * FROM utilisateurs") ;
// executer la requete
try {
    $request->execute();
    $users = $request->fetchAll(PDO::FETCH_ASSOC);
    // pour avoir uniquement un tableau associatif dans le fetch_All mettre PDO::FETCH_ASSOC
} catch (PDOExeption $e) {
    $e->getMessage();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $u){ ?>
                <tr>
                    <td><?= $u["nom"]; ?></td>
                    <td><?= $u["prenom"]; ?></td>
                    <td><?= $u["email"]; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>