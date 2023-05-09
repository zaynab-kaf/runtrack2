<?php
// On va créer des variables contenant des booleen, chaines de charachter, chiffres entier, chiffrer a virgule...
$boolVar = true;
$intVar = 42;
$stringVar = "Hello world!";
$floatVar = 3.14;


/* On va ensuite venir creer le tableau html qui contson header trois colonnes (type, nom, valeur) 
et dans son body, une ligne pour chacune des variables et de leurs informations. */

echo "<table>
        <thead>
            <tr>

                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>

            </tr>
        </thead>
        <tbody>
            <tr>

                <td>Boolean</td>
                <td>boolVar</td>
                <td>" . ($boolVar ? 'true' : 'false') . "</td>

            </tr>
            <tr>
                <td>Entier</td>
                <td>intVar</td>
                <td>$intVar</td>
            </tr>
            <tr>

                <td>Chaîne de caractères</td>
                <td>stringVar</td>
                <td>$stringVar</td>

            </tr>
            <tr>
                <td>Nombre à virgule flottante</td>
                <td>floatVar</td>
                <td>$floatVar</td>
            </tr>
        </tbody>
    </table>";
?>
