<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8</title>
</head>
<body>
    <h2>Partie 1 : Nombres pairs de 0 à 20</h2>
    <p>
    <?php
    $i = 0;
    while ($i <= 20) {
        if ($i === 10) {
            echo "<strong>" . $i . "</strong> ";
        } else {
            echo $i . " ";
        }
        $i += 2;
    }
    ?>
    </p>

    <h2>Partie 2 : while vs do-while</h2>
    <?php
    $c1 = 5; $execWhile = 0;
    while ($c1 < 5) {
        $execWhile++;
        $c1++;
    }

    $c2 = 5; $execDoWhile = 0;
    do {
        $execDoWhile++;
        $c2++;
    } while ($c2 < 5);

    echo "<p>Exécutions du corps while : " . $execWhile . "</p>";
    echo "<p>Exécutions du corps do-while : " . $execDoWhile . "</p>";
    ?>

    <h2>Partie 3 : continue et break</h2>
    <p>
    <?php
    for ($k = 1; $k <= 20; $k++) {
        if ($k === 16) {
            break;
        }
        if ($k % 3 === 0) {
            continue;
        }
        echo $k . " ";
    }
    ?>
    </p>
</body>
</html>