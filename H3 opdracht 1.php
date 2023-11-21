<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello World Example</title>
    </head>
    <body>
        <?php
        //  Een voorbeeld van een echo en een print
        echo "<h1>Hallo wereld,</h1>";
        echo "Ik zit op het ";

        // Voorbeeld van een variabele in PHP.
        $schoolnaam = "Techniek College Rotterdam!";

        // Met echo kun je iets op het scherm tonen.
        echo "$schoolnaam";
        
        //Mijn naam in variabele.
        $name = "Eleidy";
        echo "<br><br>Hallo: $name";
        echo "<br><br>";
        
        //H3 opdracht 1.
        date_default_timezone_set("Europe/Amsterdam");
        $today = date("l j F Y");
        echo "Het is vandaag: $today";
        
        echo "<br>";
        $jaar = date("y");
        echo "Vandaag is het de $jaar" . "e dag van het jaar";
        
        echo"<br>";
        $dag = date("l");
        $dageninweek = date("w");
        echo "$dag is de $dageninweek" . "de dag van de week";
        
        echo "<br>";
        $maand = date("F");
        $maanddagen = date("t");
        echo "De maand $maand heeft in totaal $maanddagen dagen.";

        echo "<br>";
        $schrikkeljaar = date("L");
        echo $schrikkeljaar;
        $year = date("Y");
        
        if ($schrikkeljaar == 0) {
            echo "Het jaar $year is geen schrikkeljaar";
        }
        else {
            echo "Het jaar $year is well een schrikkeljaar";
        }
        ?>
    </body>
</html>
