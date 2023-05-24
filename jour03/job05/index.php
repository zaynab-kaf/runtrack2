<?php

// On crée la chaine de caractères str
$str = "on n'est pas le meilleur quand on le croit mais quand on le sait";

// On crée aussi le dictionnaire
$dic = array(
    'consonnes' => 0,
    'voyelles' => 0
);

// On paarcours la chaîne caractère par caractère
for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];

    // On verifie si le caractère est une voyelle.
    if (in_array($char, array('a', 'e', 'i', 'o', 'u'))) {
        $dic['voyelles']++;
    // Autrement, c'est une consonne.
    } else {
        $dic['consonnes']++;
    }
}

// Puis on affiche le contenu du dictionnaire dans un tableau html.
echo '<table>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>' . $dic['voyelles'] . '</td>
                <td>' . $dic['consonnes'] . '</td>
            </tr>
        </tbody>
    </table>';
    

// Facultatif ; Pour un rendu plus agréable a lire, je rajoute des delimitations au tableau 
echo "<style>";
echo "table {";
echo "    border-collapse: collapse;";
echo "    width: 20%;";
echo "}";
echo "th, td {";
echo "    border: 1px solid black;";
echo "    padding: 8px;";
echo "}";
echo "</style>";
?>
