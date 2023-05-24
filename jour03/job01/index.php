<?php

// Je crée d'abord une liste contenant les nombres paires ou impaires.
$liste = [200, 204, 173, 98, 171, 404, 459];

// Je crée le tableau html
echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Nature</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

// La fonction foreach va nous permettre de parcourir la liste
foreach ($liste as $nombre) {
    echo "<tr>";
    echo "<td>" . $nombre . "</td>";

    // Si le chiffre est divisible par 2 il est donc pair, et on affiche paire.
    if ($nombre % 2 === 0) {
        echo "<td>paire</td>";
    // Sinon il est impair, et on affiche impaire.
    } else {
        echo "<td>impaire</td>";
    }
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";

// Facultatif ; Pour un rendu plus agréable a lire, je rajoute des delimitations au tableau 
echo "<style>";
echo "table {";
echo "    border-collapse: collapse;";
echo "    width: 100%;";
echo "}";
echo "th, td {";
echo "    border: 1px solid black;";
echo "    padding: 8px;";
echo "}";
echo "</style>";

?>
