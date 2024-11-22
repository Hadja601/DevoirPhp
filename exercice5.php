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
  <form method="post" action=" ">
       <h2> calcul du diamètre,du perimètre,et la surface </h2>
       <br> <br>
       <form action="" method="POST">
        <label for="rayon"> donnez le rayon (en cm) : </label>
        <input type="number" name="rayon" id="rayon"  required>
        <br><br>
        <input type="submit" value="Calculer">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rayon = $_POST['rayon'];
        if ($rayon > 0) {
            $diametre = 2 * $rayon;
            $perimetre = 2 * pi() * $rayon;
            $surface = pi() * $rayon * $rayon;
            echo " <br><p>Diamètre : " . round($diametre, 2) . " cm</p>";
            echo " <br><p>Périmètre : " . round($perimetre, 2) . " cm</p>";
            echo "<br><p> Surface : " . round($surface, 2) . " cm²</p>";
        } else {
            echo "<h5 style='color: red;'>Le rayon doit être un nombre positif.</h5>";
        }
    }
?>
</div>
</body>
</html>
