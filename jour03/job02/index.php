<?php

// on crée la chaine de caractères str
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// $i est une variable qui aura la valeur de 0 et qui augmentera de 2 à chaque fois qu'elle parcourira $str.
// La valeur de $i est enfait sa position.
for ($i = 0; $i < strlen($str); $i += 2) {

    // On affiche donc la position de $i dans $str
    echo $str[$i];
}

?>
