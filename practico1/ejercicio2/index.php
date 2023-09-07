<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
    <?php 
        //arreglo indexado
        $listaIndexada = ["cosa1","cosa2","cosa3"];

        //arreglo asociativo
        $listaAsociativa = array(
            "cosa1" => "cosa1",
            "cosa2" => "cosa2",
            "cosa3" => "cosa3",
        )
    ?>
    <h1>Lista de formato indexada</h1>
    <ul>
        <?php
            foreach($listaIndexada as $lista){
                echo "<li>$lista</li>";
            }
        ?>
    </ul>

    <h1>Lista de formato asociativo</h1>
    <ul>
        <?php
            foreach($listaAsociativa as $valor){
                echo "<li>$valor</li>";
            }
        ?>
    </ul>
</body>
</html>