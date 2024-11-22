<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PHP </title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9; 
            color: #333;
        }

        header {
            background-color: #56c8a3; 
            color: white;
             text-align: center;
            padding: 20px;
            font-size: 1.8rem;
            border-bottom: 2px solid #4b9c80; 
    }


        .container {
            width: 80%;
            margin: 40px auto;
        }

        .group {
            margin-bottom: 40px;
        }

        .group h2 {
            background-color: #56c8a3;
            color: white;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }

        .exercise-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 20px;
        }

        .exercise-item {
            background-color: #ffffff; 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .exercise-item a {
            text-decoration: none;
            color: #56c8a3; 
            font-weight: bold;
            font-size: 1.2rem;
            display: block;
            margin-top: 10px;
        }

        .exercise-item a:hover {
            color: #4b9c80;
            text-decoration: underline;
        }

        .exercise-item h3 {
            margin-bottom: 10px;
            color: #333;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: white;
            margin-top: 40px;
        }

       
        @media (max-width: 768px) {
            .exercise-list {
                grid-template-columns: 1fr 1fr; 
            }
        }

        @media (max-width: 480px) {
            .exercise-list {
                grid-template-columns: 1fr; 
            }
        }
    </style>
</head>
<body>

<header>
    Exercices PHP
</header>

<div class="container">

  
    <div class="group">
        <h2>Groupe 1: Exercices 1 à 10</h2>
        <div class="exercise-list">
            <div class="exercise-item">
                <h3>Exercice 1</h3>
                <a href="exercice1.php">Découvrez l'exercice 1</a>
            </div>
            <div class="exercise-item">
                <h3>Exercice 2</h3>
                <a href="exercice2.php">Découvrez l'exercice 2</a>
            </div>
            <div class="exercise-item">
                <h3>Exercice 3a</h3>
                <a href="exercice3a.php">Découvrez à l'exercice 3a</a>
            </div>
            <div class="exercise-item">
                <h3>Exercice 3b</h3>
                <a href="exercice3b.php">Découvrez  l'exercice 3b</a>
            </div>
            <div class="exercise-item">
                <h3>Exercice 4</h3>
                <a href="exercice4.php">Découvrez  l'exercice 4</a>
            </div>
            <div class="exercise-item">
                <h3>Exercice 5</h3>
                <a href="exercice5.php">Découvrez l'exercice 5</a>
            </div>
            <div class="exercise-item">
                <h3>Exercice 6</h3>
                <a href="exercice6.php">Découvrez l'exercice 6</a>
            </div>
            <div class="exercise-item">
                <h3>Exercice 7</h3>
                <a href="exercice7.php">Découvrez  l'exercice 7</a>
            </div>
            <div class="exercise-item">
                <h3>Exercice 8</h3>
                <a href="exercice8.php">Découvrez l'exercice 8</a>
            </div>
            <div class="exercise-item">
                <h3>Exercice 9</h3>
                <a href="exercice9.php">Découvrez  l'exercice 9</a>
            </div>
        </div>
    </div>
    <div class="group">
        <h2>Groupe 2: Exercices 11 à 17</h2>
        <div class="exercise-list">
            <div class="exercise-item">
                <h3>Exercice 11</h3>
                <a href="exercice11.php">Découvrez l'exercice 11</a>
            </div>
            <div class="exercise-item">
                <h3>Exercice 12</h3>
                <a href="exercice12.php">Découvrez l'exercice 12</a>
            </div>
            <div class="exercise-item">
                <h3>Exercice 13</h3>
                <a href="exercice13.php">Découvrez  l'exercice 13</a>
            </div>
            <div class="exercise-item">
                <h3>Exercice 14</h3>
                <a href="exercice14.php"> Découvrez l'exercice 14</a>
            </div>
            <div class="exercise-item">
                <h3>Exercice 15</h3>
                <a href="exercice15.php">Découvrez l'exercice 15</a>
            </div>
            <div class="exercise-item">
                <h3>Exercice 16</h3>
                <a href="exercice16.php">Plongez dans l'exercice 16</a>
            </div>
            <div class="exercise-item">
                <h3>Exercice 17</h3>
                <a href="exercice17.php">Explorez l'exercice 17</a>
            </div>
        </div>
    </div>

</div>

<footer>
    <p>© 2024 devoir php </p>
</footer>

</body>
</html>
