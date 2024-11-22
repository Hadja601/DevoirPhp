<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acheter - Agence Immobilière de Hadja Diallo</title>
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
        .price {
            font-size: 1.2rem;
            font-weight: bold;
            color: #4CAF50;
            margin-top: 10px;
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
    <h2>Découvrez nos biens à acheter !</h2>
    
    <div class="images-container">
        <div class="image-card">
            <img src="images/appart3.jpg" alt="Appartement à acheter">
            <h3>votre maison en amoureux</h3>
            <p class="price">Prix: 500 000 CFA</p>
        </div>
        <div class="image-card">
            <img src="images/appar1.jpg" alt="Maison à acheter">
            <h3>Maison familiale</h3>
            <p>Maison spacieuse de 3 chambres avec jardin, idéal pour une famille.</p>
            <p class="price">Prix: 1 000 000 CFA</p>
        </div>
        <div class="image-card">
            <img src="images/apparPicine.jpg" alt="Villa à acheter">
            <h3>Villa de luxe</h3>
            <p>Villa luxueuse de 4 chambres avec piscine</p>
            <p class="price">Prix: 2 000 000 CFA</p>
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
