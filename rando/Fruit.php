<?php
//Functie: definitie class Fruit

class Fruit{

    //properties
    public $name;
    private $price;

    //methodes
    function setprice($price){
        $this->price = $price;
    }

    function printprijs(){
        echo "De prijs is: " . $this->price. "<br>";
    }


    function printname(){

    }

}

?>