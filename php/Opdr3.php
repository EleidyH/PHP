<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cijfersysteem</title>
    <style>
        table, td {
            border: 1px solid black; /*zet de randen van de tabel en cellen*/
            border-collapse: collapse;
        }
        td{
            padding: 8px; /*voegt ruimte toe binnen de cellen */
            text-align: left; /*tekstuitlijning in cellen */
        }
    </style>
</head>
<body>

<?php
//verbinding met database maken
try {
    //nieuwe PDO-instance aanmaken
    $db = new PDO("mysql:host=localhost;dbname=cijfersysteem", "root", "");

    //bereidt de Sql-query voor om de leerlingnamen en cijfers op te halen
    $query = $db->prepare("SELECT leerling, cijfer FROM cijfers");

    //voert de voorbereide query uit
    $query->execute();

    //haalt alle resultaten op als een associatieve array
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    echo "<table>";
    echo "<tr><th>Leerling</th><th>Cijfer</th></tr>";

    foreach ($result as $data) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($data['leerling']) . "</td>";
        echo "<td>" . htmlspecialchars($data['cijfer']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} catch(PDOException $e) {

    die("Error!: " . $e->getMessage());
}
?>
</body>
</html>