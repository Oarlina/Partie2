<h1>Exercice 9:</h1>

<?php

$elements= ["Masculin", "Féminin", "Autre"];

function afficherRadio($elements)
{
    $result = "<select>";
    for ($i=0;$i<count($elements);$i++)
    {
        $result .= "<input type='radio'>$elements[$i]</input> <br>";
    }
    $result .= "</select>";
    return $result;
}

echo afficherRadio($elements);

?>