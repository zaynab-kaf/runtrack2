<?php

// On crée la chaine de caractères str
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// On c la chaîne en un tableau de caractères
$chars = str_split($str);

// Obtenir le dernier caractère
$lastChar = end($chars);

// Puis on va parcourir la chaîne en remplaçant chaque caractère par le suivant
for ($i = 0; $i < count($chars) - 1; $i++) {
    $chars[$i] = $chars[$i + 1];
}

// On remplace le dernier caractère par le premier
$chars[count($chars) - 1] = $chars[0];

// Puis on vient reconstruire la chaîne à l'envers grace au tableau de caractères
$newStr = implode('', $chars);

echo $newStr;

?>
