<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulario de Datos Personales</title>
</head>
<body>
    <h1>Formulario de Datos Personales</h1>
    <form action="procesar.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required><br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" required><br>

        <label>Género:</label>
        <input type="radio" name="genero" value="Masculino" required> Masculino
        <input type="radio" name="genero" value="Femenino" required> Femenino
        <input type="radio" name="genero" value="Otro" required> Otro<br>

        <label for="pais">País:</label>
        <select name="pais" required>
            <option value="EEUU">Estados Unidos</option>
            <option value="Canada">Canadá</option>
            <option value="Argentina">Argentina</option>
            <!-- Agrega más opciones de países según tu necesidad -->
        </select><br>

        <label>Intereses:</label>
        <input type="checkbox" name="intereses[]" value="Deportes"> Deportes
        <input type="checkbox" name="intereses[]" value="Música"> Música
        <input type="checkbox" name="intereses[]" value="Viajes"> Viajes
        <input type="checkbox" name="intereses[]" value="Libros"> Libros
        <!-- Agrega más intereses según tu necesidad -->

        <br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
