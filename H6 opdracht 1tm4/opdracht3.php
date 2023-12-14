<?php
function Willekeurigepostcode(){
    echo rand(1000,9999);

    $stringtekst = "ABCDEFGHIJKLMNOPQRSTUVXYZ";

    $random = substr(str_shuffle($stringtekst), 0, 2);

    echo $random;
}


?>