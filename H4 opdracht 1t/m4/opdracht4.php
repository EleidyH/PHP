<?php

// Variabele met de oude prijs
$oudePrijs = 100;

// Logica voor het berekenen van de nieuwe prijs
if ($oudePrijs > 150) {
    $verhogingPercentage = 19;
} elseif ($oudePrijs < 55) {
    $verhogingPercentage = 11;
} else {
    $verhogingPercentage = 16;
}

// Bereken de nieuwe prijs
$verhogingFactor = 1 + ($verhogingPercentage / 100);
$nieuwePrijs = $oudePrijs * $verhogingFactor;

// Weergave van de oude en nieuwe prijs in een zin
echo "Oude prijs: " . number_format($oudePrijs, 2, ',', '.') . " euro. Na verhoging van $verhogingPercentage% is de prijs: " . number_format($nieuwePrijs, 2, ',', '.') . " euro.";

?>

