<?php
$voyelles = 0;
$consonnes = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['chaine'])) {
    $chaine = $_POST['chaine']; 
    $chaine = strtolower($chaine);
    foreach (str_split($chaine) as $caractere) {
        if (ctype_alpha($caractere)) {
            if (in_array($caractere, ['a', 'e', 'i', 'o', 'u', 'y'])) {
                $voyelles++;
            } else { 
                $consonnes++;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comptage des Voyelles et Consonnes</title>
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

    <h2>Compter les Voyelles et Consonnes</h2>
    <form method="POST">
        <label for="chaine">Entrez une chaîne de caractères : </label>
        <input type="text" id="chaine" name="chaine" required>
        <button type="submit">Soumettre</button>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
        <h2>Résultats pour la chaîne : "<?php echo htmlspecialchars($chaine); ?>"</h2>
        <table>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
            <tr>
                <td><?php echo $voyelles; ?></td>
                <td><?php echo $consonnes; ?></td>
            </tr>
        </table>
    <?php endif; ?>
 </div>
</body>
</html>
