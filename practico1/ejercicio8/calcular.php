<?php
    if(isset($_POST["num1"]) && isset($_POST["num1"]) && isset($_POST["operacion"])){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacion = $_POST["operacion"];

        switch($operacion){
            case "sumar":
                $resultado = $num1 + $num2;
                break;
            case "resta":
                $resultado = $num1 - $num2;
                break;
            case "multiplicar":
                $resultado = $num1 * $num2;
                break; 
            case "dividir":
                if($num2 != 0){
                    $resultado = $num1 / $num2;
                }
                else{
                    $resultado = "Dividir por cero no permitido.";
                }
                break;
            default:
                $resultado = "Operacion no valida.";
                break;       
        }

        echo "Resultado: $resultado";
    }