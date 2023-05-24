<?php

// On crée la chaine de caractères str
$str = "Les choses que l'on possède finissent par nous posséder.";

// Grace a la fonction --, on peut parcourir chaîne de caractères à l'envers
for ($i = strlen($str) - 1; $i >= 0; $i--) {
    echo $str[$i];
}

?>
