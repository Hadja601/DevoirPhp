<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['vendre'])) {
        header("Location: vendre.php");
        exit();
    } elseif (isset($_POST['acheter'])) {
        header("Location: acheter.php");
        exit();
    } elseif (isset($_POST['louer'])) {
        header("Location: louer.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Immobilier</title>
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
        input[type="submit"] {
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container">
 <h1>Choisissez une option immobilière</h1>

  <form action="" method="POST">
    <input type="submit" name="vendre" value="Vendre">
    <input type="submit" name="acheter" value="Acheter">
    <input type="submit" name="louer" value="Louer">
  </form>
</div>
</body>
</html>
