<h1>Exercice 2:</h1>

<?php

$capitales = ["France" => "paris", 
            "Allemagne" => "berlin",
            "USA" => "washington",
            "Italie" => "rome",
            "Espagne" => "madrid"];

function afficherTableauHTML ($capitales)
{
    ksort($capitales); // trie les clés du tableau dans l'ordre alphabétique
    $result = "<table border=1>
                <thead>
                    <tr>
                        <th> Pays</th>
                        <th> Capital</th>
                    </tr>
                </thead>
                <tbody>";
    foreach ($capitales as $pays => $capital)
    {
        $result .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>".ucfirst($capital)."</td>
                    </tr>";
    }
    $result .= "</tbody> </table>";
    return $result;
}
echo afficherTableauHTML ($capitales);

?>