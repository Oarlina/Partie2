<h1>Exercice 10:</h1>

<?php

$nomInput = ["Nom", "Prenom", "Email", "Ville"];
$genre= ["Masculin", "Féminin", "Autre"];
$formation= ["Développeur logiciel", "Designer web", "Intégrateur", "Chef de projet"];

// Version 1:


// Pour créer un formulaire avec le nom, prénom, email, et ville à remplir
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
// Pour créer un formulaire "radio"
function afficherRadio($genre)
{
    $result = "<b>Genre:</b> <br>";
    for ($i=0;$i<count($genre);$i++)
    {
        $result .= "<input type='radio'>$genre[$i]</input> <br>";
    }
    $result .= "<br>";
    return $result;
}
// Pour créer un formulaire d'une liste deroulante à sélectionner

function alimenterListeDeroulante($formation)
{
    $result = "<b>Formation</b> <br> <select type='section' ><libellé>$formation[0]</libellé>";
    for ($i=0;$i<count($formation);$i++)
    {
        $result .= "<option valeur='$formation[$i]'>$formation[$i]</option>";
    }
    $result .= "</select><br>";
    return $result;
}

echo "<form method='post' action='action.php'>".afficherInput($nomInput).afficherRadio($genre).alimenterListeDeroulante($formation)."<br><button type='submit'>Envoyer</button></form>";


// POur faire un boutton qui envoie les infos (pour l'instant nul part)
echo " <br><br>";


// Version 2

// echo "<br><br><h3>Version 2:</h3>";
// function CreerFormulaire ($nomInput, $genre, $formation)
// {
    // $result = "";
    // for ($i=0;$i<count($nomInput);$i++)
    // {
        // $result .= $nomInput[$i]."<br>". "<input name='$nomInput[$i]' border = 1/> <br>";
    // }
    // $result .= "<b>Genre:</b> <br>";
    // for ($i=0;$i<count($genre);$i++)
    // {
        // $result .= "<input type='radio'>$genre[$i]</input> <br>";
    // }
    // $result .= "<b>Formation</b> <br> <select type='section'><libellé>$formation[0]</libellé>";
    // for ($i=0;$i<count($formation);$i++)
    // {
        // $result .= "<option valeur='$formation[$i]'>$formation[$i]</option>";
    // }
    // $result .= "</select> <br><br> <input type ='Submit'></input>";
    // return $result;
// }

// echo CreerFormulaire($nomInput,$genre,$formation);


?>