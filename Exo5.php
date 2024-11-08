<h1>Exercice 5:</h1>

<?php

$nomInput = ["Nom", "Prenom", "Ville"];

function afficherInput ($nomInput)
{
    $result = "";
    for ($i=0;$i<count($nomInput);$i++)
    {
        $result .= $nomInput[$i]."<br><input name='$nomInput[$i]' border = 1/> <br>";
    }
    $result .= "<br>";
    return $result;
}

echo afficherInput($nomInput);
?>