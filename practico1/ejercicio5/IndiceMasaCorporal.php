<?php

    function calcularIMC($peso,$altura){
        $imc = $peso/($altura * $altura);
        return $imc;
    }

    function determinarEstado($imc){
        if($imc < 18.5){
            return "Bajo peso";
        }
        elseif($imc >= 18.5 && $imc < 24.9){
            return "Normal";
        }
        elseif($imc >= 25 && $imc < 29.9){
            return "Sobrepeso";
        }
        else{
            return "Obesidad";
        }
    }

    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $imc = calcularIMC($peso,$altura);
    $estado = determinarEstado($imc);

    echo "<h2>Resultado</h2>";
    echo"<p>El IMC es: $imc</p>";
    echo"<p>Estado: $estado</p>";
    