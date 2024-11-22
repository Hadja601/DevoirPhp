<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 - Tirages aléatoires (for)</title>
</head>
<style>
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
        h1 {
            font-size: 36px;
            color: #333;
        }
        form input {
            font-size: 18px;
            padding: 10px;
            margin: 10px;
        }
        .result {
            font-size: 24px;
            color: #007BFF;
            margin-top: 20px;
        }
    </style>
<body>
<div class="container">
    <h2>Choisir un nombre de trois chiffres  </h2>

    <form method="post">
        <label for="number">Entrez un nombre de trois chiffres :</label>
        <input type="number" name="number" id="number" min="100" max="999" required>
        <br> <br>
        <input type="submit" value="Lancer le tirage">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombrechoisis = intval($_POST['number']); 
        $cpt = 0;
        for ($tirage= 0; $tirage!= $nombrechoisis;  $cpt++) {
            $tirage = rand(100, 999); 
        }   

        echo "<p>Le nombre choisi était <strong>$nombrechoisis</strong>.</p>";
        echo "<p>Il a fallu <strong> $cpt</strong> tirages pour obtenir ce nombre.</p>";
    }
    ?>
   </div> 
</body>
</html>
