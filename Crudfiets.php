<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fietsenshop</title>
    <style>
        table, td {
            border: 1px solid black; /*zet de randen van de tabel en cellen*/
            border-collapse: collapse;
        }
        td , th{
            border: 1px solid black;
            width: 100px;
        }
    </style>
</head>
<body>
    <?php
        //verbinding met database maken
try {
    //nieuwe PDO-instance aanmaken
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");

    //bereidt de Sql-query voor om de leerlingnamen en cijfers op te halen
    $query = $db->prepare("SELECT * FROM fietsen");

    //voert de voorbereide query uit
    $query->execute();

    //haalt alle resultaten op als een associatieve array
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    echo "<table>";
    echo "<tr><th>Merk</th><th>Type</th><th>Prijs</th><th>Wijzig</th><th>Verwijderen</th></tr>";

    foreach ($result as $data) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($data['merk']) . "</td>";
        echo "<td>" . htmlspecialchars($data['type']) . "</td>";
        echo "<td>" . htmlspecialchars($data['prijs']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} catch(PDOException $e) {

    die("Error!: " . $e->getMessage());
}
?>
</body>
</html>