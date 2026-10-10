<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2</title>
</head>
<body>
<?php
$nom = "MOUDDOU";
$prenom = "Fatima";
$age = 20;
$formation = "Informatique Appliquée";

$phrase = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans et j'étudie en " . $formation . ". ";
$phrase .= "J'apprends PHP.";

echo "<p>" . $phrase . "</p>";

$note = 12;
$Note = 16;

echo "<p>Note (\$note) : " . $note . "</p>";
echo "<p>Note (\$Note) : " . $Note . "</p>";
?>
</body>
</html>