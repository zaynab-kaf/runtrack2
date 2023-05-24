<?php

// Cet exo est semblable a celui que l'on a fait sur python,
// il suffit d'adapter en php.


//  
for ($i = 1; $i <= 1000; $i++) {
    $True = true;


    // On vérifie si le nombre est divisible par un autre nombre que 1 et lui-même
    for ($diviseur = 2; $diviseur < $i; $diviseur++) {
        // Si le nombre ne l'est pas, alors True sera égal a False, et le chiffre ne s'affichera pas.
        if ($i % $diviseur === 0) {
            $True = false;
            break;
        }
    }

    // Donc si True est True, alors on va afficher les nombres premiers.
    if ($True) {
        echo $i . '<br />';
    }
}
?>
