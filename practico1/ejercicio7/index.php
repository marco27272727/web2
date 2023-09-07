<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Ejercicio7</title>
</head>
<body>
    <h1>Simulación de Inversión Bancaria</h1>

    <form method="post">
        <label for="inversionInicial">Inversión Inicial:</label>
        <input type="number" name="inversionInicial" id="inversionInicial" required>
        <br>

        <label for="tasaInteresMensual">Tasa de Interés Mensual (%):</label>
        <input type="number" name="tasaInteresMensual" id="tasaInteresMensual" required>
        <br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if (isset($_POST["inversionInicial"]) && isset($_POST["tasaInteresMensual"])) {
        // Obtener los valores ingresados por el usuario
        $inversionInicial = $_POST["inversionInicial"];
        $tasaInteresMensual = $_POST["tasaInteresMensual"] / 100; // Convertir la tasa a decimal
        $meses = 12; // Duración de la inversión en meses

        // Crear la tabla HTML
        echo '<table border="1">
                <tr>
                    <th>Mes</th>
                    <th>Saldo</th>
                </tr>';

        $saldo = $inversionInicial;

        for ($mes = 1; $mes <= $meses; $mes++) {
            // Calcular el saldo para el mes actual
            $saldo += $saldo * $tasaInteresMensual;

            echo '<tr>
                    <td>' . $mes . '</td>
                    <td>' . number_format($saldo, 2) . '</td>
                </tr>';
        }

        echo '</table>';
    }
    ?>
</body>
</html>