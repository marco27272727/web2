<h1>Formulario de Pago de Cuota</h1>

<form action="agregar" method="post">
    <label for="nombre">Nombre del Deudor:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="cuota">Número de Cuota Pagada:</label>
    <input type="number" id="cuota" name="cuota" required><br><br>

    <label for="cuota_capital">Monto de la Cuota Pagada:</label>
    <input type="number" id="cuota_capital" name="cuota_capital" step="0.01" required><br><br>

    <label for="fecha_pago">Fecha de Pago de la Cuota:</label>
    <input type="date" id="fecha_pago" name="fecha_pago" required><br><br>

    <input type="submit" value="Registrar Pago">
</form>