<?php
//functie: hoofdporgramma webshop fruit
//autor: me


//intialisatie
//include_once "functions.php";

//Toevoegen class definitie fruit
include_once "Fruit.php";

//main

//aanmaken object op basis van de class beschrijving
$banaan = new Fruit();
$banaan->setprice(4.0);
$banaan ->name = "Banaan";
$banaan-> printprijs();
var_dump($banaan);

$appel = new Fruit();
$appel->setprice(2.0);
$appel ->name = "Appel";
var_dump($appel);

?>