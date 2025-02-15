<?php

class Huis {
    // Eigenschappen van de klasse Huis
    public $aantalVerdiepingen;
    public $aantalKamers;
    public $breedte;
    public $hoogte;
    public $diepte;
    
    // Vaste prijs per kubieke meter
    const PRIJS_PER_M3 = 1500;

    // Constructor om de eigenschappen in te stellen
    public function __construct($aantalVerdiepingen, $aantalKamers, $breedte, $hoogte, $diepte) {
        $this->aantalVerdiepingen = $aantalVerdiepingen;
        $this->aantalKamers = $aantalKamers;
        $this->breedte = $breedte;
        $this->hoogte = $hoogte;
        $this->diepte = $diepte;
    }

    // Methode om het volume van het huis te berekenen
    public function berekenVolume() {
        return $this->breedte * $this->hoogte * $this->diepte;
    }

    // Methode om de prijs van het huis te berekenen
    public function berekenPrijs() {
        $volume = $this->berekenVolume();
        return $volume * self::PRIJS_PER_M3;
    }

    // Methode om alle details van het huis weer te geven
    public function toonDetails() {
        $volume = $this->berekenVolume();
        $prijs = $this->berekenPrijs();
        echo "Dit Huis heeft $this->aantalVerdiepingen verdiepingen, $this->aantalKamers kamers en een volume van $volume m³\n<br>";
        echo "De prijs van het huis is $prijs\n\n<br>";
    }
}

// Maak drie objecten van de klasse Huis
$huis1 = new Huis(2, 5, 10, 6, 12);

$huis2 = new Huis(3, 7, 8, 7, 10);

$huis3 = new Huis(1, 4, 12, 5, 8);

// Toon de details van elk huis
$huis1->toonDetails();

$huis2->toonDetails();

$huis3->toonDetails();

?>
