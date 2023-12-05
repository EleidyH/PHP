<?php

// Twee variabelen met willekeurige waarden
$variabele1 = 8;
$variabele2 = 12;

// Bepaal welke van de twee variabelen de grootste waarde heeft
$grootsteWaarde = ($variabele1 > $variabele2) ? $variabele1 : $variabele2;

// Vermenigvuldig de grootste waarde met 2 en tel op bij de andere variabele
$uitkomst =($grootsteWaarde * 2) + $variabele1 + $variabele2;

// Weergave van de uitkomst
echo "Uitkomst $uitkomst";

?>



