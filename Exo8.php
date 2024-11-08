<h1>Exercice 8:</h1>

<?php

$url = "http://my.mobirise.com/data/userpic/764.jpg";

function repeterImage ($url,$nb)
{
    $result = "";
    for ($i=0;$i<$nb;$i++)
    {
        $result .= "<img src='$url'> ";
    }
    return $result;
}

echo repeterImage($url,4);

?>