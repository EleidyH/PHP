<?php 
    include ("Fietsmaker.php");
    try {
        $db = new PDO ("mysql:host=localhost;dbname=fietsmaker","root","");
    } catch (PDOException $e) {
        die("Error!: " . $e->getMessage());
    }
?>