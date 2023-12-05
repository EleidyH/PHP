<?php
// Variabele voor spaargeld
$spaargeld = 500; // Pas deze waarde aan om het script met verschillende waarden te testen

// Kosten van de iPhone
$kostenIPhone = 1000;

// Bereken het tekort
$tekort = $kostenIPhone - $spaargeld;

// Controleer of je de iPhone kunt kopen en geef de juiste melding
if ($spaargeld >= $kostenIPhone) {
    $over = $spaargeld - $kostenIPhone;
    echo "Je spaargeld is nu: $spaargeld euro, hiermee is het mogelijk om de iPhone te kopen! Je hebt nog $over euro over voor bijvoorbeeld een hoesje.";
} elseif ($tekort > 250) {
    echo "Je spaargeld is nu: $spaargeld euro, je komt dus $tekort euro te kort! Je kan beter nog even een baantje gaan zoeken.";
} else {
    echo "Je spaargeld is nu: $spaargeld euro, het komt bijna in de buurt, maar je hebt nog $tekort euro te weinig. Misschien kun je nog wat extra sparen.";
}
?>
