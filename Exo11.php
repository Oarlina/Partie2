<h1>Exercice 11:</h1>

<?php

function formaterDateFr($date){

    // On crée l'objet avec la fonction new pour ensuite l'utiliser et changer la chaîne de caractères numériques en mots

    $now = new DateTime($date);

    // On crée le formatage à partir duquel on change l'affichage, pareil on crée un objet

    $fmt = new IntlDateFormatter(
        "fr_FR",
        IntlDateFormatter::FULL, // pour afficher la date
        IntlDateFormatter::NONE // pour afficher l'heure

    );

    // On applique le formatage à l'objet $now= new DateTime($date)

    echo $fmt->format($now);

}
 
formaterDateFr("2018-02-23");
 
?>