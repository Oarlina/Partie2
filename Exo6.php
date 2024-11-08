<h1>Exercice 6:</h1>

<?php

$elements= ["Monsieur", "Madame", "Mademoiselle"];

function alimenterListeDeroulante ($elements)
{
    $result = "<select type='section'><libellé>$elements[0]</libellé>";
    for ($i=0;$i<count($elements);$i++)
    {
        $result .= "<option valeur='$elements[$i]'>$elements[$i]</option>";
    }
    $result .= "</select>";
    return $result;
}

echo alimenterListeDeroulante($elements);

?>