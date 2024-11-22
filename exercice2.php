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
        .toi{
            color:red;
        }
        .elle{
            color:blue;
        }
    </style>
</head>
<body>
<div class="container">
   <form method="post" action=" ">
       <h2> Test pour verifier si un nombre est multiple de 3 et 5 </h2>
       <br> 
       <label for="number"> <h3> entrez un nombre:  </h3> </label>
       <input type="number" name="number" id="number" required>
       <br> <br> 
       <p> <input type="submit" value=" verification"> 
   </form>

   <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = intval($_POST['number']);
            if ($number % 3 == 0 && $number % 5 == 0) {
                echo "<p class='elle'>$number est  un multiple de 3 et de 5.</p>";
            } else {
                echo "<pstyle='color: red;'>$number n'est pas  un multiple de 3 et de 5.</p>";
            }
        } 
 ?>
</div>
</body>
</html>