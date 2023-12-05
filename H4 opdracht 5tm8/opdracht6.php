<?php
// Huidig uur
$uur = 8;

// Temperatuur en luchtvochtigheid (zelf te kiezen waarden)
$temperatuur = 22; // bijvoorbeeld 22 graden Celsius
$luchtvochtigheid = 80; // bijvoorbeeld 80%

// Logica om te bepalen of de airco aan of uit moet zijn
if ($uur >= 8 && $uur < 17) {
    // Tijd tussen 8 uur 's morgens en 5 uur 's middags
    if ($uur == 17 || $temperatuur < 20 && $luchtvochtigheid < 85) {
        echo "Airco moet uit.";
    } else {
        echo "Airco moet aan.";
    }
} else {
    // Buiten de werktijden (voorbeeld: 's avonds of 's nachts)
    echo "Buiten werktijden, airco moet uit.";
}
?>
