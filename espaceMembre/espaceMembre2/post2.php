<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>
<body>
<?php include_once "nav2.php"; ?>

    <form action="traitement2.php" method="post">
        <input type="file" name="img">
        <textarea name="message" cols="30" rows="10" placeholder="votre message">
        </textarea>
        <button name="publier">publier</button>
    </form>
</body>
</html>