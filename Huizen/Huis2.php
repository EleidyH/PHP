<?php

class Kamer {
    private $lengte;
    private $hoogte;
    private $breedte;

    public function __construct($lengte, $hoogte, $breedte) {
        $this->lengte = $lengte;
        $this->hoogte = $hoogte;
        $this->breedte = $breedte;
    }

    public function berekenVolume() {
        return $this->lengte * $this->hoogte * $this->breedte;
    }
}

class Huis {
    private $aantalVerdiepingen;
    private $aantalKamers;
    private $breedte;
    private $hoogte;
    private $diepte;
    private $kamers = [];

    public function __construct($aantalVerdiepingen, $aantalKamers, $breedte, $hoogte, $diepte) {
        $this->aantalVerdiepingen = $aantalVerdiepingen;
        $this->aantalKamers = $aantalKamers;
        $this->breedte = $breedte;
        $this->hoogte = $hoogte;
        $this->diepte = $diepte;
    }

    public function voegKamerToe(Kamer $kamer) {
        $this->kamers[] = $kamer;
    }

    public function berekenVolume() {
        $totaalVolume = 0;
        foreach ($this->kamers as $kamer) {
            $totaalVolume += $kamer->berekenVolume();
        }
        return $totaalVolume;
    }

    public function berekenPrijs() {
        $prijsPerKubiekeMeter = 1500;
        return $this->berekenVolume() * $prijsPerKubiekeMeter;
    }

    public function toonDetails() {
        echo "Aantal verdiepingen: " . $this->aantalVerdiepingen . "<br>";
        echo "Aantal kamers: " . $this->aantalKamers . "<br>";
        echo "Breedte: " . $this->breedte . " meter<br>";
        echo "Hoogte: " . $this->hoogte . " meter<br>";
        echo "Diepte: " . $this->diepte . " meter<br>";
        echo "Volume: " . $this->berekenVolume() . " kubieke meter<br>";
        echo "Prijs: €" . $this->berekenPrijs() . "<br><br>";
    }
}

// Maak drie objecten van de klasse Huis
$huis1 = new Huis(2, 4, 10, 5, 8);
$huis2 = new Huis(1, 3, 8, 4, 6);
$huis3 = new Huis(3, 6, 12, 6, 10);

// Maak kamers voor elk huis
$kamer1 = new Kamer(4, 3, 5);
$kamer2 = new Kamer(3, 3, 4);
$kamer3 = new Kamer(5, 3, 6);
$kamer4 = new Kamer(4, 3, 5);
$kamer5 = new Kamer(3, 3, 4);
$kamer6 = new Kamer(5, 3, 6);
$kamer7 = new Kamer(4, 3, 5);
$kamer8 = new Kamer(3, 3, 4);
$kamer9 = new Kamer(5, 3, 6);
$kamer10 = new Kamer(4, 3, 5);
$kamer11 = new Kamer(3, 3, 4);
$kamer12 = new Kamer(5, 3, 6);

// Voeg de kamers toe aan de huizen
$huis1->voegKamerToe($kamer1);
$huis1->voegKamerToe($kamer2);
$huis1->voegKamerToe($kamer3);
$huis1->voegKamerToe($kamer4);
$huis2->voegKamerToe($kamer5);
$huis2->voegKamerToe($kamer6);
$huis2->voegKamerToe($kamer7);
$huis3->voegKamerToe($kamer8);
$huis3->voegKamerToe($kamer9);
$huis3->voegKamerToe($kamer10);
$huis3->voegKamerToe($kamer11);
$huis3->voegKamerToe($kamer12);

// Roep voor elk huis de methode toonDetails() aan
$huis1->toonDetails();
$huis2->toonDetails();
$huis3->toonDetails();

?>