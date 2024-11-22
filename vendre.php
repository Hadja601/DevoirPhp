<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendre - Agence Immobilière de Hadja Diallo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        .navbar {
            position: absolute;
            top: 10px;
            right: 20px;
        }
        .navbar a {
            text-decoration: none;
            color: white;
            background-color: #4CAF50;
            padding: 10px 20px;
            border-radius: 5px;
            margin-left: 10px;
        }
        .navbar a:hover {
            background-color: #45a049;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            text-align: center;
        }
        .images-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .image-card {
            width: 30%;
            margin: 10px;
            background-color: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .image-card img {
            width: 100%;
            border-radius: 8px;
        }
        .image-card h3 {
            margin-top: 10px;
            font-size: 1.5rem;
        }
        .image-card p {
            margin-top: 10px;
            color: #555;
        }
        .links {
            margin-top: 20px;
        }
        .links a {
            text-decoration: none;
            color: #4CAF50;
            font-size: 1.2rem;
            margin-right: 20px;
        }
        .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<header>
    <h1>Bienvenue à l'agence immobilière de Hadja Diallo</h1>
</header>

<div class="container">
    <h2>Découvrez nos biens à vendre !</h2>
    
    <div class="images-container">
        <div class="image-card">
            <img src="images/m2simple.jpg" alt="Maison moderne">
            <h3>Maison moderne à vendre</h3>
            <p>Maison spacieuse avec 4 chambres et un grand jardin. Idéale pour une famille.</p>
        </div>
        <div class="image-card">
            <img src="images/mo.webp" alt="Appartement">
            <h3>Appartement en centre-ville</h3>
            <p>Un bel appartement au cœur de la ville, proche des commerces et des transports.</p>
        </div>
        <div class="image-card">
            <img src="images/picine.jpg" alt="Villa">
            <h3>Villa avec picine </h3>
            <p>Villa luxueuse et une piscine privée.</p>
        </div>
    </div>
    <div class="links">
        <a href="vendre.php">Vendre votre bien</a>
        <a href="acheter.php">Acheter un bien</a>
        <a href="louer.php">Louer un bien</a>
        <a href="Exercice15.php">aller a l'accueille</a>
        
    </div>
</div>
</body>
</html>
