<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas Deportivas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .instalacion {
            margin: 20px 0;
            padding: 10px;
            background: #eaeaea;
            border-radius: 5px;
            text-align: center;
        }
        .instalacion a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        .instalacion a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Reservas de Instalaciones Deportivas</h1>
    <div class="instalacion">
        <a href="reservar.php?instalacion=piscina">Piscina</a>
    </div>
    <div class="instalacion">
        <a href="reservar.php?instalacion=gimnasio">Gimnasio</a>
    </div>
    <div class="instalacion">
        <a href="reservar.php?instalacion=tenis">Pista de tenis</a>
    </div>
    <div class="instalacion">
        <a href="reservar.php?instalacion=futbol">Campo de fútbol</a>
    </div>
</div>

</body>
</html>
