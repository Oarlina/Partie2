<h1>Exercice 4:</h1>

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
                        <th> Liens wiki </th>
                    </tr>
                </thead>
                <tbody>";
    foreach ($capitales as $pays => $capital)
    {
        $result .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>".ucfirst($capital)."</td>
                        <td> <a href='https://fr.wikipedia.org/wiki/$capital' target='_blank'>Lien </a> </td>
                        // Permet de créer un lien 
                    </tr>";
    }
    $result .= "</tbody> </table>";
    return $result;
}
echo afficherTableauHTML ($capitales);

?>