<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4</title>
</head>
<body>
<h2>Types et valeurs d'origine</h2>
<pre>
<?php
$v1 = 42;
$v2 = "42";
$v3 = 15.8;
$v4 = true;
$v5 = false;
$v6 = null;

var_dump($v1, $v2, $v3, $v4, $v5, $v6);
?>
</pre>

<h2>Conversions manuelles</h2>
<pre>
<?php
$conv1 = (int)$v2;
$conv2 = (int)$v3;
$conv3 = (string)$v1;

var_dump($conv1, $conv2, $conv3);
?>
</pre>

<h2>Affichage de true et false</h2>
<p>Avec echo : true = [<?php echo $v4; ?>] | false = [<?php echo $v5; ?>]</p>
<pre>
Avec var_dump :
<?php var_dump($v4, $v5); ?>
</pre>

<h2>Conversions en booléen</h2>
<pre>
<?php
var_dump((bool)0);
var_dump((bool)"0");
var_dump((bool)"PHP");
var_dump((bool)[]);
?>
</pre>
</body>
</html>