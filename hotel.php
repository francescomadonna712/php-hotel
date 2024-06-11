<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php-Hotel</title>
</head>

<body>
    <h2>Elenco degli Hotel</h2>
    <div class="tab">
        <table class="hotel">
            <?php
            foreach ($hotels as $hotel) {
                echo "<th>" . $hotel['name'] . "</th>";
                echo "<td>Descrizione: " . $hotel['description'] . "</td>";
                echo "<td>Parcheggio: " . ($hotel['parking'] ? 'Sì' : 'No') . "</td>";
                echo "<td>Voto: " . $hotel['vote'] . "</td>";
                echo "<td>Distanza dal centro: " . $hotel['distance_to_center'] . " km</td>";
            }
            ?>
        </table>
    </div>

</body>

</html>