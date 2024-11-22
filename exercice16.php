<?php      
function transformerTableau(&$tableau) {
    foreach ($tableau as &$chaine) {
        $chaine = ucfirst(strtolower($chaine));
    }
}
$tableau = ["bonjour", "jE DoiS", "etre COAch", "En", "DeveLOPpement Personnel"];


$tableauOriginal = $tableau;

transformerTableau($tableau);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformation des chaînes</title>
    <style>
        table {
            width: 45%;
            border-collapse: collapse;
            margin: 20px 10px;
            float: left;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
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
<h2>Tableaux Avant et Après Transformation</h2>
<h3>Avant Transformation</h3>
<table>
    <thead>
        <tr>
            <th>Index</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($tableauOriginal as $index => $chaine) {
            echo "<tr>";
            echo "<td>$index</td>";
            echo "<td>$chaine</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
<h3>Après Transformation</h3>
<table>
    <thead>
        <tr>
            <th>Index</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($tableau as $index => $chaine) {
            echo "<tr>";
            echo "<td>$index</td>";
            echo "<td>$chaine</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
<div>
</body>
</html>
