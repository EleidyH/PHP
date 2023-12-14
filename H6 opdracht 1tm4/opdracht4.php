<?php


function berekenOmtrekCirkel($straal) {
    $pi = 3.14;
    $omtrek = 2 * pi() * $straal;
    return $omtrek;
}
//main


//Test de functie met een straal van 5
$uitkomst = berekenOmtrekCirkel(5);
echo berekenOmtrekCirkel(5)
?>