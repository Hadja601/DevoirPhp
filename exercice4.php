<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul du PPCM</title>
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
        h2 {
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
</head>
<body>
<div class="container">
    <h2>Calcul du PPCM </h2>
    <form method="POST">
       Entrez le  Nombre 1: <input type="number" name="nombre1" required><br><br>
       Entrez le  Nombre 2: <input type="number" name="nombre2" required><br><br>
        <input type="submit" value="Calculer le PPCM">
    </form>

    <?php
    if (isset($_POST['nombre1']) && isset($_POST['nombre2'])) {
        $nombre1 = $_POST['nombre1'];
        $nombre2 = $_POST['nombre2'];
        if ($nombre1 <= 0 || $nombre2 <= 0) {
            echo "<p style='color:red;'>Les deux nombres doivent être supérieurs à zéro.</p>";
        } else {
            if ($nombre1 > $nombre2) {
                $ppcm = $nombre1;
            } else {
                $ppcm = $nombre2;
            }
            while (($ppcm % $nombre1 != 0) || ($ppcm % $nombre2 != 0)) {
                $ppcm++;
            }
            echo "<p>Le PPCM de $nombre1 et $nombre2 est : $ppcm</p>";
        }
    }
    ?>
 </div>
</body>
</html>
