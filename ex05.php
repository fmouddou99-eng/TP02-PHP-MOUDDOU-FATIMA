<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 5</title>
</head>
<body>
<?php
$moyenne = 14;

if ($moyenne < 0 || $moyenne > 20) {
    echo "<p>Note invalide</p>";
} elseif ($moyenne < 10) {
    echo "<p>Moyenne " . $moyenne . " : Non validé</p>";
} elseif ($moyenne < 12) {
    echo "<p>Moyenne " . $moyenne . " : Passable</p>";
} elseif ($moyenne < 14) {
    echo "<p>Moyenne " . $moyenne . " : Assez bien</p>";
} elseif ($moyenne < 16) {
    echo "<p>Moyenne " . $moyenne . " : Bien</p>";
} else {
    echo "<p>Moyenne " . $moyenne . " : Très bien</p>";
}
?>
</body>
</html>