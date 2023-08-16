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
}else{
    echo "$nombre le nombre est impaire."."<br> Jeremy Trop Beau mdr ";
}
    ?>
</body>
</html>