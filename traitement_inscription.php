<?php
if(isset($_POST["register"])){
    $nom = htmlspecialchars( $_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $mot_de_passe = htmlspecialchars($_POST["mot_de_passe"]);
    $confirmer_mot_de_passe = htmlspecialchars($_POST["confirmer_mot_de_passe"]);

    // for view saisi
    echo"<pre>";
    print_r($_POST);
    echo"</pre>";

 // Vérification si les champs ne sont pas vides
 if (empty($nom) || empty($email) || empty($mot_de_passe) || empty($confirmer_mot_de_passe)) {
    echo "Tous les champs sont obligatoires.";
    
} else {
    // Vérification si les mots de passe correspondent
    if ($mot_de_passe === $confirmer_mot_de_passe) {
        echo "Inscription réussie !";
    } else {
        echo "Les mots de passe ne correspondent pas.";
    }
}
}
?>
