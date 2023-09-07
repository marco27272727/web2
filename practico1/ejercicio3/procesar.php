<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];

        if(empty($nombre) || empty($apellido) ||empty($edad)){
            echo "Ningun campo puede estar vacio";
        }
        else{
            echo "Nombre: $nombre<br>";
            echo "Apellido: $apellido<br>";
            echo "Edad: $edad<br>";
        }
    }
?>
<a href="index.php">Volver</a>