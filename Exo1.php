<h1>Exercice 1:</h1>
<h2>Résultat: </h2>

<style>
    .red {color:red;}
</style>


<?php

$texte = "Convertir texte en majuscule rouge";


// Méthode 1:

function convertirMajRouge ($texte)
{
    $maj = mb_strtoupper($texte);
    $result = "<p class='red'>$maj</p>"; // pour mettre le texte en rouge
    return $result;
}

echo convertirMajRouge($texte)."<br>";

// Méthode 2:

function convertirMajRouge2 ($texte)
{
    return "<p class='red'>".mb_strtoupper($texte)."</p>";
}
echo convertirMajRouge2($texte)."<br>";

// Méthode pour pouvoir choisir la couleur a prendre:

function convertirMajColor ($texte,$color)
{
    return "<p style='color:$color'>".mb_strtoupper($texte)."</p>";
}

echo convertirMajColor($texte,'blue')."<br>";

?>