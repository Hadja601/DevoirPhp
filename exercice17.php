<?php
function calculerSinus($angle, $unite = 'r') {
    if ($unite == 'd') {
        $angle = deg2rad($angle);
    } elseif ($unite == 'g') {
        $angle = $angle * (M_PI / 200);
    }
    return sin($angle);
}

$angle = 0;
$unite = 'r';
$sinus = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angle = $_POST['angle'];
    $unite = $_POST['unite'];
    $sinus = calculerSinus($angle, $unite);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul du Sinus</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        label, input {
            margin-bottom: 10px;
        }
        input[type="number"], select {
            padding: 5px;
            width: 150px;
        }
        input[type="submit"] {
            padding: 5px 10px;
            cursor: pointer;
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
        h1 {
            font-size: 36px;
            color: #333;
        }
    </style>
</head>
<body>
<div class="container">
<h1>Calcul du Sinus d'un Angle</h1>

<form action="" method="POST">
    <label for="angle">Angle :</label>
    <input type="number" id="angle" name="angle" value="<?php echo $angle; ?>" required><br><br>

    <label for="unite">Unité :</label>
    <select name="unite" id="unite">
        <option value="r" <?php echo ($unite == 'r' ? 'selected' : ''); ?>>Radian</option>
        <option value="d" <?php echo ($unite == 'd' ? 'selected' : ''); ?>>Degré</option>
        <option value="g" <?php echo ($unite == 'g' ? 'selected' : ''); ?>>Grade</option>
    </select><br><br>

    <input type="submit" value="Calculer le Sinus">
</form>

<?php

if ($sinus !== null) {
    echo "<h2>Résultat :</h2>";
    echo "<p>Le sinus de " . $angle . " " . ($unite == 'r' ? "radian" : ($unite == 'd' ? "degré" : "grade")) . " est : " . number_format($sinus, 4) . "</p>";
}
?>
</div >
</body>
</html>
