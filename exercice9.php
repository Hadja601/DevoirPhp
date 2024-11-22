<?php
$personnes = [
    "MDD" => [
        "prénom" => "mamadou",
        "ville" => "Paris",
        "âge" => 7
    ],
    "diallo" => [
        "prénom" => "Sophie",
        "ville" => "chine",
        "âge" => 15
    ],
    "sheha" => [
        "prénom" => "oumou",
        "ville" => "LABE",
        "âge" => 20
    ],
    "bah" => [
        "prénom" => "khadiatou",
        "ville" => "conakry",
        "âge" => 10
    ]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des personnes</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .container {
            
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            font-size: 36px;
            color: #333;
        }    
    </style>
</head>
<body>
<div class="container">
<h2>Informations des personnes</h2>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Ville</th>
            <th>Âge</th>
        </tr>
    </thead>
        <?php
        foreach ($personnes as $nom => $info) {
            echo "<tr>";
            echo "<td>$nom</td>";
            echo "<td>" . $info['prénom'] . "</td>";
            echo "<td>" . $info['ville'] . "</td>";
            echo "<td>" . $info['âge'] . " ans</td>";
            echo "</tr>";
        }
        ?>
</table>
</div>
</body>
</html>
