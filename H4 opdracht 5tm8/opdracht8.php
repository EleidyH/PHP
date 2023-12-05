<?php
// Leeftijd
$leeftijd = 14;

// Stempas ontvangen (true of false)
$stempasOntvangen = false;

// Controleer of je scooterrijbewijs mag halen
if ($leeftijd >= 16) {
    echo "Je mag praktijkexamen voor je scooterrijbewijs doen." . PHP_EOL;
} else {
    echo "Je bent nog te jong om praktijkexamen voor je scooterrijbewijs te doen." . PHP_EOL;
}

// Controleer of je mag stemmen
if ($leeftijd >= 18) {
    // Controleer of stempas is ontvangen
    if ($stempasOntvangen) {
        echo "Je mag stemmen." . PHP_EOL;
    } else {
        echo "Je mag niet stemmen, want je hebt geen stempas." . PHP_EOL;
    }
} else {
    echo "Je bent nog te jong om te stemmen." . PHP_EOL;
}
?>
