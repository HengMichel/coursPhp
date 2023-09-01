<?php session_start(); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Page de connexion</title>
</head>
<body>
    <form action="./model/security.php" method="post" enctype="multipart/form-data">
        <?php if(isset($_SESSION["error"])){?>
            <p><?= $_SESSION["error"]; ?></p>
        <?php } unset($_SESSION["error"]); ?>

        <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <input type="password" name="passwords" placeholder="Your password :" class="passwords">
        </div>

        <div>
            <button name="connection">Log in</button>
        </div>
    </form>
</body>
</html>