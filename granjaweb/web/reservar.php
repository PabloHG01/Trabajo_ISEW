<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Instalación</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
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
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 15px;
            color: #555;
        }
        input, select, textarea {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
        $instalacion = isset($_GET['instalacion']) ? htmlspecialchars($_GET['instalacion']) : 'Instalación no especificada';
        echo "<h1>Reserva de $instalacion</h1>";

        // Procesar el formulario después de la confirmación
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Aquí normalmente guardarías la reserva en la base de datos.
            // Asumiendo que la reserva se ha guardado correctamente:

            echo "<script>
                alert('Reserva confirmada para $instalacion. Gracias por reservar!');
                window.location.href = 'index.php';
            </script>";
            exit();
        }
    ?>
    <form action="reservar.php?instalacion=<?php echo urlencode($instalacion); ?>" method="post">
        <label for="nombre">Nombre Completo:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required>

        <input type="hidden" id="instalacion" name="instalacion" value="<?php echo $instalacion; ?>">

        <label for="fecha">Fecha de la Reserva:</label>
        <input type="date" id="fecha" name="fecha" required>

        <label for="hora">Hora de la Reserva:</label>
        <input type="time" id="hora" name="hora" required>

        <button type="submit">Confirmar Reserva</button>
    </form>
</div>

</body>
</html>
