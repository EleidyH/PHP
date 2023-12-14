<?php
//auteur: Eleidy
//functie: print tekst/vertikaal
/*
abcd

a
b
c
d
*/

function printVertikaal($tekst) {
    //code van de functie
    echo "$tekst<br>";

    //2e teken wil printen
    
    //bepaal leng
    $len = strlen($tekst);

    for ($i=0; $i < $len ; $i++) {
        echo $tekst[$i] . "<br>";
    }
}

//main
printVertikaal("abcd");

printVertikaal("123456789");

?>