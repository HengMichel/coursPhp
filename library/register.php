<?php
require_once("./inc/function.php");
require_once("./inc/header.php");
?>
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
<?php
require_once("./inc/footer.php");
?>