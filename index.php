<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nom = "Heng";
    $prenom = "Mic";
    $nomComplet = $prenom. " ".$nom;
    // echo "<p> Bonjour je suis ".$prenom. " ".$nom."</p>" 
    echo "<p> Bonjour je suis ".$nomComplet."</p>"; 

    $phrase = "La programmation est amusante";
    $mot = substr($phrase, 3, 13); // Résultat : "programmation"
    echo $mot."<br>";

    $texte = "Bonjour tout le monde";
    $position = strpos($texte, "tout"); // Résultat : 8 (position du mot "tout"
    echo $position."<br>";


    $texte = "Les chats sont adorables";
    $nouveauTexte = str_replace("chats", "licorns", $texte); // Résultat : "Les licorns sont adorables"
    echo $nouveauTexte."<br>";

    // Conversion de casse
    $texte = "Hello World";
    $minuscules = strtolower($texte); // Résultat : "hello world"
    echo $minuscules."<br>";
    
    $majuscules = strtoupper($texte); // Résultat : "HELLO WORLD"
    echo $majuscules."<br>";

    // Conversion en majuscule/minuscule initiale
    $texte = "hello world";
    $premiereMaj = ucfirst($texte); // Résultat : "Hello world"
    echo $premiereMaj."<br>";

    $premiereMin = lcfirst($texte); // Résultat : "hello world"
    echo $premiereMin."<br>";

    // Suppression des espaces
    $texte = " Bonjour ";
    $texteSansEspaces = trim($texte); // Résultat : "Bonjour
    echo $texteSansEspaces."<br>";

    // Conversion en tableau
    $liste = "pomme,orange,banane";
    $tableau = explode(",", $liste); // Résultat : ["pomme", "orange", "banane"]
    print_r($tableau);
    echo "<br>";

    $liste = "pommes,oranges,bananes";
    $tableau = explode("s", $liste); // Résultat : ["pomme", "orange", "banane"]
    print_r($tableau);
    echo "<br>";

    // Jointure de tableau en chaîne
    $tableau = ["pomme", "orange", "banane"];
    $liste = implode(", ", $tableau); // Résultat : "pomme, orange, banane"
    print_r($tableau);
    echo "<br>";

    // Vérification de présence de sous-chaîne
    $texte = "Bonjour à tous";
    $contientBonjour = strpos($texte, "Bonjour") !== false; // Résultat : true
    echo $contientBonjour."<br>";

    $mavar = null;
    if(isset ($mavar)){
        echo "existe bien";
    }else{
        echo "n'existe pas";
    }

$str = "10 maisons";
$nbr = (int) $str;
echo "$nbr = $nbr ; son type est : " . gettype($nbr);
// Affiche : $nbr = 10 ; son type est : integer

$str = "maisons 10";
$nbr = (int) $str;
echo "$nbr = $nbr ; son type est : " . gettype($nbr);
// Affiche : $nbr = 0 ; son type est : integer

    ?>
    <!-- // commentaire sur une ligne
 # commentaire sur une ligne autrement
 /* commentaire
 sur plusieurs
 lignes */ -->

</body>
</html>