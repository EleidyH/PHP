<?php
    //Defined Class, Fruit is the main Object.
    class Fruit {
        //We are declaring Fruit with two properties and giving them methods
        //Properties
        public $name;
        public $color;

        //Methods
        function set_name($name) {
            $this->name = $name;
        }
        function get_name() {
            return $this->name;
        }
    //Note: In a class, variables are called properties and functions are called methods!
    }

    $apple = new Fruit();
    $banana = new Fruit();
    $apple ->set_name("Apple");
    $banana ->set_name("Banana");

    echo $apple->get_name();
    echo "<br>";
    echo $banana->get_name();
?>