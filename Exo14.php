<h1>Exercice 14: </h1>

<?php

$email_a = 'joe@gmail.com';
$email_b = 'bogus@outlook';


if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$email_b' est considérée comme valide.<br>";
} else {
    echo "L'adresse email '$email_b' est considérée comme invalide.<br>";
}
?>