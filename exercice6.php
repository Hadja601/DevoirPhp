<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diviseurs d'un nombre</title>
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
</head>
<body>

    <div class="container">
        <h1>Affichage des diviseurs d'un nombre</h1>
        <form method="POST">
            <label for="nombre">Entrez un nombre : </label>
            <input type="number" name="nombre" id="nombre" required min="1"><br><br>
            <input type="submit" value="Afficher les diviseurs">
        </form>

        <?php
        if (isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'];
            } else {
                $diviseurs = [];
                for ($i = 1; $i <= $nombre; $i++) {
                    if ($nombre % $i == 0) {
                        $diviseurs[] = $i; 
                    }
                }
                echo "<p class='result'>Les diviseurs de $nombre sont : " . implode(", ", $diviseurs) . "</p>";
            }
        
        ?>

    </div>

</body>
</html>

</body>
</html>