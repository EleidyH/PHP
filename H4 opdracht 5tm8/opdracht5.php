<?php
// Functie om te controleren of een getal even of oneven is
function checkEvenOrOdd($number) {
    if ($number % 2 == 0) {
        return "even";
    } else {
        return "oneven";
    }
}

// Test verschillende getallen
$getal1 = 4;
$getal2 = 7;
$getal3 = 10;

// Resultaten weergeven
echo "Het getal $getal1 is " . checkEvenOrOdd($getal1) . "<br>";
echo "Het getal $getal2 is " . checkEvenOrOdd($getal2) . "<br>";
echo "Het getal $getal3 is " . checkEvenOrOdd($getal3) . "<br>";
?>
