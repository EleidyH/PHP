<?php
    // Huidige uur verkrijgen
    $currentHour = date('H');

    // Bepaal het dagdeel op basis van het huidige uur met een match-statement (vanaf PHP 8)
    $dagdeel = match (true) {
        ($currentHour >= 6 && $currentHour < 12) => "ochtend",
        ($currentHour >= 12 && $currentHour < 18) => "middag",
        ($currentHour >= 18 && $currentHour < 24) => "avond",
        default => "nacht"
    };

    // Weergave van het dagdeel
    echo "Het is $dagdeel.";

?>

