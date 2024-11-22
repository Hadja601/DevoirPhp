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
       <h2> choisir 3 nombres et effectuez le nombre de tirage necessaire pour l'avoir  </h2>
       <br> 
       <label for="number"> <h3> entrez un nombre de 3 chiffre  </h3> </label>
       <input type="number" name="number" id="number" min="100" max="999"required>
       <br> <br> 
       <p> <input type="submit" value=" lancer le tirage"> 
   </form>
   <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombrechoisis = intval($_POST['number']); 
        $cpt = 0; 
        $tirage= 0; 
        while ($tirage != $nombrechoisis) {
            $tirage= rand(100, 999); 
            $cpt++; 
        }

        echo "<p>Le nombre choisi était <strong>$nombrechoisis  </strong>.</p>";
        echo "<p>Il a fallu <strong> $cpt </strong> tirages pour obtenir ce nombre.</p>";
    }
    ?>
</div>
</body>
</html>