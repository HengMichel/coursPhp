<?php
if(isset($_SESSION["id"])){ ?>
    <nav>
        <a href="post2.php">Publier</a>
        <div class="profil">
            <img src="images2/<?= $_SESSION["img"]; ?>" alt="profil">
        </div>
        <!-- <img src="images2/<?php echo $_SESSION["img"]; ?>" alt="profil"> -->
        <form method="post">
            <button class="deco" name="deco">Déconnexion</button>
        </form>
    </nav>
<?php } else { ?>
    <nav>
        <button><a href="pageConnexion.php">connexion</a></button>
    </nav>
<?php } ?>    

<?php
if(isset($_POST["deco"])){
    session_destroy();
    echo"<script>location.href='pageConnexion.php'</script>";

}
?>