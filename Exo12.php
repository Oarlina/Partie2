<h1>Exercice 12: </h1>

<?php

$tableauValeurs=[true,
                "texte",
                10,
                25.369,
                ["valeur1","valeur2"]];

$i=0;
while ($i < count($tableauValeurs))
{
    echo var_dump($tableauValeurs[$i])."<br>"; // afficher d'une façon jolie un tableau
    $i++;
}

?>