<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];
        $genero = $_POST["genero"];
        $pais = $_POST["pais"];
        $intereses = isset($_POST["intereses"]) ? $_POST["intereses"] : array();

        echo "<p>Nombre: $nombre</p>";
        echo "<p>Apellido: $apellido</p>";
        echo "<p>Edad: $edad años</p>";
        echo "<p>Género: $genero</p>";
        echo "<p>País: $pais</p>";

        if (!empty($intereses)) {
            echo "<p>Intereses:</p>";
            echo "<ul>";
            foreach ($intereses as $interes) {
                echo "<li>$interes</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No se han seleccionado intereses.</p>";
        }
    }
    ?>
</body>