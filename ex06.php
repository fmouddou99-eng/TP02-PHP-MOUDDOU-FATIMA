<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 6</title>
</head>
<body>
<?php
$numeroMois = (int)date("m");

switch ($numeroMois) {
    case 1:  $mois = "Janvier"; break;
    case 2:  $mois = "Février"; break;
    case 3:  $mois = "Mars"; break;
    case 4:  $mois = "Avril"; break;
    case 5:  $mois = "Mai"; break;
    case 6:  $mois = "Juin"; break;
    case 7:  $mois = "Juillet"; break;
    case 8:  $mois = "Août"; break;
    case 9:  $mois = "Septembre"; break;
    case 10: $mois = "Octobre"; break;
    case 11: $mois = "Novembre"; break;
    case 12: $mois = "Décembre"; break;
    default: $mois = "Numéro de mois invalide"; break;
}

echo "<p>Mois courant : " . $mois . "</p>";
?>
</body>
</html>