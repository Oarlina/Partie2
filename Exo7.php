<h1>Exercice 7:</h1>

<?php

$elements= ["Choix 1", "Choix 2", "Choix 3"];

function alimenterListeDeroulante ($elements)
{
    $result = "<select>";
    for ($i=0;$i<count($elements);$i++)
    {
        $result .= "<input type='checkbox'>$elements[$i]</input> <br>";
    }
    $result .= "</select>";
    return $result;
}

echo alimenterListeDeroulante($elements);

?>