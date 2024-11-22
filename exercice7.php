<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <h1>Test si un nombre saisis au clavier est parfait</h1>
        <form method="POST">
            <label for="nombre">Entrez un nombre : </label>
            <input type="number" name="nombre" id="nombre" required min="1"><br><br>
            <input type="submit" value="tester">
        </form>
  <?php 
    if (isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        $somme = 0;
        for ($i = 1; $i < $nombre; $i++) {
            if ($nombre % $i == 0) {
                $somme += $i;  
            }
        }    
        if ($somme == $nombre) {
            echo "$nombre est un nombre parfait";
        } else {
            echo "$nombre n'est pas un nombre parfait";
        }
    }
 ?>
 </div>
</body>
</html>