<?php
// Start de sessie
session_start();

// Controleer of de sessievariabele is ingesteld, zo niet, initialiseer deze met 0
if (!isset($_SESSION['page_visits'])) {
    $_SESSION['page_visits'] = 0;
}

// Verhoog het aantal bezoeken bij elke paginaweergave
$_SESSION['page_visits']++;

// Toon het aantal bezoeken
echo "Aantal keer bezocht: " . $_SESSION['page_visits'];
?>
