<?php

function showTask(){
    include_once './template/head.php' ?>

    <h1>Tabla de Multiplicar</h1>
    <ul>
        <li><a href="tabla/5">tabla del 5</a></li>
        <li><a href="tabla/10">tabla del 10</a></li>
        <li><a href="tabla/15">tabla del 15</a></li>
    </ul>

    <?php include_once './template/footer.php';
}

function tablaMultiplicar($limite) {

    require './template/head.php';
    // Validación
    if (empty($limite)) {
        echo "<p>Debe enviar un valor</p>";
    } elseif ($limite <= 0) {
        echo "<p>Debe enviar un valor mayor a 0</p>";
    } else {
        echo"TABLA DEL $limite";
        echo "<table>";
            echo "<tbody>";
            for ($i = 1; $i <= $limite; $i++) {
                echo "<tr>";
                    for ($j = 1; $j <= $limite; $j++) {
                        echo "<td"; if ($i == 1 || $j == 1 || $i == $j) {echo ' class="high-light"';}echo ">" 
                            . ($i * $j) .  
                             "</td>";
                    }
                echo "</tr>";
            }
            echo "</tbody>";
        echo "</table>";
    }
    require './template/footer.php';
}