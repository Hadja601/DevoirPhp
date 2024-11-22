<?php
$personnes = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $code_postal = $_POST['code_postal'];
    $personnes[] = [
        'nom' => $nom,
        'prenom' => $prenom,
        'adresse' => $adresse,
        'ville' => $ville,
        'code_postal' => $code_postal
    ];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire - Adresse Client</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, td, th {
            border: 1px solid black;
        }
        td, th {
            padding: 10px;
            text-align: center;
        }
        form {
            margin-bottom: 20px;
        }
        label, input {
            margin-bottom: 10px;
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
<h1>Formulaire - Adresse Client</h1>
<form action="" method="POST">
    <fieldset>
        <legend>Adresse client</legend>

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse" required><br><br>

        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville" required><br><br>

        <label for="code_postal">Code Postal :</label>
        <input type="text" id="code_postal" name="code_postal" required><br><br>

        <input type="submit" value="Envoyer">
    </fieldset>
</form>
<?php
if (!empty($personnes)) {
    echo "<h2>Informations sur les clients :</h2>";
    echo "<table>";
    echo "<tr><th>Nom</th><th>Prénom</th><th>Adresse</th><th>Ville</th><th>Code Postal</th></tr>";
    foreach ($personnes as $personne) {
        echo "<tr>";
        echo "<td>" . $personne['nom'] . "</td>";
        echo "<td>" . $personne['prenom'] . "</td>";
        echo "<td>" . $personne['adresse'] . "</td>";
        echo "<td>" . $personne['ville'] . "</td>";
        echo "<td>" . $personne['code_postal'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>
</div>
</body>
</html>
