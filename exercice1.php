
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
        h3 {
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
        .moi{
            color:red;
        }
        .moi1{
            color:blue;
        }
    </style>
  
</style>
</head>
<body>
<div class="container">
    <form method="post" action=" ">
       <h2> verification du palindrome </h2>
       <br> 
       <label for="mot"> <h3> entrez un mot:  </h3> </label>
       <input type="text" name="mot" id="mot">
    <br> <br> 
     <p> <input type="submit" value=" envoyer"> </p>

  <?php
    
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $mot = $_POST["mot"];
        $longueur = strlen($mot); 
        $estPalindrome = true;  
        for ($i = 0; $i < $longueur / 2; $i++) {
            if ($mot[$i] != $mot[$longueur - $i - 1]) {
                $estPalindrome = false; 
                break;  
            }
        }
    
        if ($estPalindrome) {
            echo "<p class='moi1'>Le mot '$mot' est un palindrome.</p>";
        } else {
            echo "<p class='moi'>Le mot '$mot' n'est pas un palindrome.</p>";
        }
      }
  ?>
 </div >
</body>
</html>