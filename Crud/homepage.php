<?php
    include ("Fietsmaker.php");
    try {
        $db = new PDO ("mysql:host=localhost;dbname=fietsenmaker","root","");
        $query = $db->prepare("SELECT * FROM fietsen");
        $query->execute();
    } catch (PDOException $e) {
        die("Error!:".$e->getMessage());
    }
?>