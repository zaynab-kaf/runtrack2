<?php

// On affiche Hello LaPlateforme
echo "Hello LaPlateforme!";
/* On
   affiche
    Hello LaPlateforme*/
echo "Hello LaPlateforme!";


////////////


// On créer une variable avec la valeur 6
$val = 6;
// On affiche son contenue
echo "Contenu de la variable val : " . $val . "<br>";
// On ajoute 4 a la variable
$val += 4;
// On affiche la nouvelle valeur de la variable
echo "Nouveau contenu de la variable val : " . $val;



////////////



// On créer une variable qui aura pour valeur True 
$myBool = true;

// On affche le contenu de la variable myBoolll
echo "Contenu de la variable myBool : " . var_export($myBool, true) . "<br>";

// On change la valeur de mybool pour False au lieu de True 
$myBool = false;

// On affiche la nouvelle valeur de la variable
echo "Nouveau contenu de la variable myBool : " . var_export($myBool, true);

?>