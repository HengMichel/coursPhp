<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
//     <!-- Exo 1:
//     À partir de la chaîne "La maison bleue", extrayez la         sous-chaîne "bleue". pui affichez la
//    $chaine = "La maison bleue"; -->
    
$chaine = "La maison bleue";
$mot = substr($chaine, 10);
echo $mot."<br>";

// Exo 2:
// Remplacez le mot "mauvais" par "excellent" dans la chaîne suivante.
// $avis = "Ce film était vraiment mauvais.";
// Effectuez le remplacement.

$avis = "Ce film était vraiment mauvais.";
$nouveauTexte = str_replace("mauvais", "excellent", $avis);
echo $nouveauTexte."<br>";

// Exo 3:
// Vous avez une chaîne de texte et vous souhaitez capitaliser la première lettre de cette chaîne.
// La chaîne de texte
$texte = "bienvenue sur notre site web.";
$premiereMaj = ucfirst($texte); // Résultat : "Bienvenue sur notre site web."
echo $premiereMaj."<br>";

// Exo 5:
// Vous avez des informations sur un produit : nom, prix et quantité.
// Calculez le prix total pour le produit et affichez-le
$nomProduit = "Ordinateur portable";
$prixUnitaire = 899.99;
$quantite = 3;
$prixTotal = $prixUnitaire*$quantite;
echo $prixTotal."<br>";

    // Exo 6:
// Vous avez un panier d'achats avec plusieurs articles et vous souhaitez calculer le prix total avec une remise.
// Détails des articles
$article1 = "Livre";
$prixArticle1 = 12.99;
$quantiteArticle1 = 2;
$article2 = "DVD";
$prixArticle2 = 9.99;
$quantiteArticle2 = 3;
$article3 = "Casque audio";
$prixArticle3 = 49.99;
$quantiteArticle3 = 1;
// Calcul du prix total avant remise et affichage
$prixTotalAvantRemise = ($prixArticle1*$quantiteArticle1)+($prixArticle2*$quantiteArticle2)+$prixArticle3;
echo $prixTotalAvantRemise."<br>";
// Calcul de la remise (10 % du prix total avant remise) et affichage
$CalculDeLaRemise = $prixTotalAvantRemise*10/100;
echo $CalculDeLaRemise."<br>";
// Calcul du prix total après remise et affichage
$CalculDuPrixTotalAprèsRemise =  $prixTotalAvantRemise-$CalculDeLaRemise;
echo $CalculDuPrixTotalAprèsRemise."<br>";

    // Exo 7:
// Vous avez un montant en euros que vous souhaitez convertir en dollars américains.
// Montant en euros
$montantEuros = 100;
// Taux de change : 1 euro = 1.18 dollars américains
$tauxChange = 1.18;
// Calculez le montant en dollars puis affichez le
$montantDollars = $montantEuros*$tauxChange;
echo $montantDollars."<br>";

# EXERCICE:
# soit la variable age suivante
$age = 18;
#ecrire le code qui permet de verifier si age est superieur a 18
# si age est superieur ou egale a 18 afficher => majeur
# si age est inferieur a 18 afficher => mineur
if($age >= 18){
    echo  "majeur"."<br>";
    }
    else{
    echo  "mineur"."<br>";
    }
    
# EXERCICE:
// une annee bissextile est une annee divisible par 4 et pas par 100 ou divisible par 400
// ecrire un programme qui permet de verifier si une annee est bisextile ou pas

$annee = 2020;  // Remplacez cette valeur par l'année que vous souhaitez vérifier

// si elle l'est affiche annee bissextile
if (($annee % 4 == 0 && $annee % 100 != 0) || ($annee % 400 == 0)) {
    echo "$annee est une année bissextile."."<br>";
    // si non affiche annee pas bissextile
} else {
    echo "$annee n'est pas une année bissextile."."<br>";
}

# EXERCICE:
#soit la variable nombre
$nombre = 3;
#ecrire un programme qui permet de tester si elle est paire ou impaire
#si elle est paire afficher => le nombre est paire
#si non afficher => le npombre est impaire
if($nombre % 2 == 0 ){
    echo "$nombre le nombre est paire."."<br>";
}

// Ajout et suppression d'éléments
// Créez un tableau vide.
$number = [];
// Ajoutez les nombres de 1 à 5 à ce tableau.
array_push ($number,1,2,3,4,5);
echo "<pre>";
print_r ($number);
echo "</pre>";
// Supprimez le troisième élément.
if (isset($number[2])) {
    unset($number[2]);
}
// Affichez le contenu final du tableau.
echo "<pre>";
print_r($number);
echo "</pre>";
// Réorganiser les indices pour avoir un tableau continu
// Afficher le tableau après suppression
$number = array_values($number);


// Recherche et modification
// Créez un tableau contenant plusieurs noms de pays.
$tab = ["France","Roumania","Iran"];
echo "<pre>";
print_r($tab);
echo "</pre>";
// Vérifiez si "France" est présent dans le tableau.
// Si oui, remplacez "France" par "Espagne".

if (in_array("France",$tab)) {
    $country = array_search("France",$tab);
    if ($country !== false) {
        $tab[$country] = "Espagne";
    }
}

// Affichez le tableau modifié.
echo "<pre>";
print_r ($tab);
echo "</pre>";

# Tirage du loto :
// - on veut 5 n° au hasard
// - on veut des n° différents
// - numéros de 1 à 49
// - comment savoir si le n° est déjà sorti ?
// - exemple : 5-7-12-49-24
$tab2 = [];

// - utilisez la fonction rand pour générer un nombre aléatoire
// - exemple : $nombreAleatoire = rand(1, 49);
while (count($tab2) < 5){
    $random = rand(1,49);
    if(!in_array($random,$tab2)){
        $tab2[] = $random;
    }
}
// - Trier les n° pour l'affichage final
sort($tab2);
// - les numeros doivent etre séparé par des tirets (-) dans l'affichage final
$tab2 = implode("-",$tab2);
echo $tab2."<br>"."<br>";



# Tirage EuroMillions
/*
 - Pour jouer à EuroMillions , il vous faut cocher 7 numéros : 
 - 5 numéros sur une grille de 50 numéros 
 - et 2 étoiles sur une grille de 12 numéros. 
 - Vous remportez le jackpot si vous avez 5 numéros gagnants et les 2 étoiles.

 - ecrire une fonction tirage qui prends deux parametres
 - le premier parametres correspond au nombre de numeros a tiré
 - le second correspond au nombre maximum que les numeros ne doivent pas dépasser
*/

function tirage($numtire,$max){
    $tab3 = [];
    while (count($tab3) <$numtire){
        $random2 = rand(1,$max);

        if(!in_array($numtire,$tab3)){
            $tab3[] = $random2;
     }
}
sort($tab3);
return $tab3;
}
// je veux 5 numeros aleatoires entre 1 et 50
$tab3 = tirage(5, 50);
// je veux deu numeros aleatoire entre 1 et 12
$etoile = tirage(2, 12);
echo implode("-",$tab3)." etoiles ".implode("-",$etoile);




    
# Exercice :***************************** Formulaire d'Inscription  *******************************************

// Dans cet exercice, vous allez créer un formulaire d'inscription en HTML et traiter les données soumises en utilisant PHP. Le formulaire d'inscription demandera aux utilisateurs de saisir leur nom, leur adresse e-mail, un mot de passe et de confirmer le mot de passe.


// Créez un fichier HTML nommé formulaire_inscription.html contenant un formulaire d'inscription avec les champs suivants :
// Nom complet (input de type texte)
// Adresse e-mail (input de type email)
// Mot de passe (input de type password)
// Confirmer le mot de passe (input de type password)
// Créez un fichier PHP nommé traitement_inscription.php pour traiter les données du formulaire d'inscription. Dans ce fichier :


// Utilisez la méthode POST pour récupérer les données soumises du formulaire ($_POST).
// Vérifiez si les champs nom, adresse e-mail, mot de passe et confirmation du mot de passe ne sont pas vides.
// Vérifiez si le mot de passe et la confirmation du mot de passe correspondent.
// Si tous les champs sont remplis et les mots de passe correspondent, affichez un message de confirmation.
// Si au moins un champ est vide ou les mots de passe ne correspondent pas, affichez un message d'erreur et indiquez les champs manquants ou incohérents.
// Dans le fichier HTML, assurez-vous que le formulaire envoie les données soumises à la page de traitement PHP (traitement_inscription.php) en utilisant la méthode POST.




    ?>
</body>
</html>