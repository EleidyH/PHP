<?php
    // Huidige uur verkrijgen
    $currentHour = date('H');
    
    // Bepaal het dagdeel op basis van het huidige uur
    if ($currentHour >= 6 && $currentHour < 12) {
        $dagdeel = "ochtend";
    } elseif ($currentHour >= 12 && $currentHour < 18) {
        $dagdeel = "middag";
    } elseif ($currentHour >= 18 && $currentHour < 24) {
        $dagdeel = "avond";
    } else {
        $dagdeel = "nacht";
    }
    
    // Weergave van het dagdeel
    echo "Het is $dagdeel.";

?>
