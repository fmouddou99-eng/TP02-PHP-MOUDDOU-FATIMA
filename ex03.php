<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3</title>
</head>
<body>
<?php
const TAUX_TVA = 20;
const DEVISE = "MAD";

$prixUnitaireHT = 60;
$quantite = 3;

$totalHT = $prixUnitaireHT * $quantite;
$montantTVA = $totalHT * (TAUX_TVA / 100);
$totalTTC = $totalHT + $montantTVA;

$totalTTC += 15;

echo "<h2>Récapitulatif Commande</h2>";
echo "<p>Total HT : " . $totalHT . " " . DEVISE . "</p>";
echo "<p>TVA (" . TAUX_TVA . "%) : " . $montantTVA . " " . DEVISE . "</p>";
echo "<p>Montant final avec livraison : " . $totalTTC . " " . DEVISE . "</p>";

if (defined("TAUX_TVA")) {
    echo "<p>La constante TAUX_TVA est bien définie.</p>";
}
?>
</body>
</html>