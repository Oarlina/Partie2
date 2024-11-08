<h1>Exercice 10:</h1>

<?php

$elements= ["Masculin", "Féminin", "Autre"];

function afficherRadio($elements)
{
    $result = "";
    for ($i=0;$i<count($elements);$i++)
    {
        $result .= "<input type='radio'>$elements[$i]</input> <br>";
    }
    $result .= "";
    return $result;
}

echo afficherRadio($elements);

?>