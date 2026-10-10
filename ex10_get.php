<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement GET</title>
</head>
<body>
<?php
if (!isset($_GET['nom'], $_GET['prenom'], $_GET['groupe'])) {
    echo "<p>Veuillez soumettre le formulaire pour afficher vos données.</p>";
} else {
    $nom = trim($_GET['nom']);
    $prenom = trim($_GET['prenom']);
    $groupe = trim($_GET['groupe']);

    if ($nom === "" || $prenom === "" || $groupe === "") {
        echo "<p style='color:red;'>Erreur : Tous les champs sont obligatoires.</p>";
    } else {
        $nomSafe = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
        $prenomSafe = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
        $groupeSafe = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');
        echo "<p>Bienvenue " . $prenomSafe . " " . $nomSafe . ", vous appartenez au groupe " . $groupeSafe . ".</p>";
    }
}
?>
</body>
</html>