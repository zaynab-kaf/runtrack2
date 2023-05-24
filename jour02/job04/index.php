<?

// Cet exo est semblable a celui que l'on a fait sur python,
// il suffit d'adapter en php.

for ($i = 1; $i <= 100; $i++) {

    // Si le chiffre est divisible par 3 et 5 alors on affiche Fizzbuzz
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo 'FizzBuzz<br />';

    // Si le chiffre est divisible seulement par 3 alors on affiche 
    } elseif ($i % 3 === 0) {
        echo 'Fizz<br />';

    // Si le chiffre est divisible seulement par 5 alors on affiche 
    } elseif ($i % 5 === 0) {
        echo 'Buzz<br />';
    } else {
        echo $i . '<br />';
    }
}
?>