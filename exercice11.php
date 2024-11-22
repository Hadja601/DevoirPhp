<?php
$joursRestants = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['date'])) {
    $dateSaisie = $_POST['date'];
    $dateUtilisateur = new DateTime($dateSaisie);
    $dateFinAnnee = new DateTime('31-12-' . $dateUtilisateur->format('Y'));
    $interval = $dateUtilisateur->diff($dateFinAnnee);
    $joursRestants = $interval->days;  
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul des Jours Restants</title>
    <style>
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
        form {
            margin: 20px;
        }
        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">   
    <h2>Calcul du Nombre de Jours Restants Jusqu'à la Fin de l'Année</h2>
    <form method="POST">
        <label for="date">Entrez une date (format : YYYY-MM-DD) : </label>
        <input type="date" id="date" name="date" required>
        <button type="submit">Calculer</button>
    </form>
    <?php if ($joursRestants !== null): ?>
        <h2>Il reste <?php echo $joursRestants; ?> jours jusqu'à la fin de l'année <?php echo date('Y'); ?>.</h2>
    <?php endif; ?>
</div>
</body>
</html>
