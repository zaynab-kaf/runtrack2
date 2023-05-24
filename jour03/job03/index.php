<?php
// on crée la chaine de caractères str
$str = "I'm sorry Dave I'm afraid I can't do that";

/* On definit $i qui aura la valeur de
   0 et qui parcourira $str. */

for ($i = 0; $i < strlen($str); $i++) {

    // On va définir les voyelles.
    $char = strtolower($str[$i]);
    
    /*Si la position de $i est une voyelle, on l'affiche.*/
    if (in_array($char, ['a', 'e', 'i', 'o', 'u'])) {
        echo $str[$i];
    }

}
?>
