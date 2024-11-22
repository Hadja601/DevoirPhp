<?php
$prixHT = $tauxTVA = $montantTVA = $prixTTC = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prixHT = $_POST['prixHT'];
    $tauxTVA = $_POST['tauxTVA'];
    $montantTVA = $prixHT * ($tauxTVA / 100);
    $prixTTC = $prixHT + $montantTVA;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul TVA et Prix TTC</title>
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
        input[type="text"], input[type="number"] {
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
<h1>Calcul du Montant de la TVA et du Prix TTC</h1>

<form action="" method="POST">
    <label for="prixHT">Prix HT (cfa) :</label>
    <input type="number" step="0.01" id="prixHT" name="prixHT" value="<?php echo $prixHT; ?>" required><br><br>

    <label for="tauxTVA">Taux de TVA (%) :</label>
    <input type="number" step="0.01" id="tauxTVA" name="tauxTVA" value="<?php echo $tauxTVA; ?>" required><br><br>

    <input type="submit" value="Calculer">
</form>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <h2>Résultats du Calcul :</h2>
    
    <p><strong>Montant de la TVA :</strong> <?php echo number_format($montantTVA, 2); ?> cfa</p>
    
    <p><strong>Prix TTC :</strong> <?php echo number_format($prixTTC, 2); ?> cfa</p>
<?php endif; ?>
</div >
</body>
</html>
