<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement POST</title>
</head>
<body>
<?php
if (!isset($_POST['nom'], $_POST['prenom'], $_POST['groupe'])) {
    echo "<p>Veuillez soumettre le formulaire pour afficher vos données.</p>";
} else {
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $groupe = trim($_POST['groupe']);

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