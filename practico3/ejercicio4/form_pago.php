<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fromulario de pagos</title>
</head>
<body>
    <h1>Registro de Pagos</h1>
    <form action="agregar" method="POST">
        <label for="nombre">Nombre del Deudor:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="cuota">Número de Cuota Pagada:</label>
        <input type="number" id="cuota" name="cuota" required><br><br>

        <label for="cuota_capital">Monto de la Cuota Pagada:</label>
        <input type="number" id="cuota_capital" name="cuota_capital" step="0.01" required><br><br>

        <label for="fecha_pago">Fecha de Pago:</label>
        <input type="date" id="fecha_pago" name="fecha_pago" required><br><br>

        <input type="submit" value="Registrar Pago">
    </form>    
</body>
</html>