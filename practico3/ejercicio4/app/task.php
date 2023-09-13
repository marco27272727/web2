<?php

    require_once './app/db.php';

    // este es el ejercicio a)
    function showPayments(){
        
        $pagos = getList();

        echo "<ul>";
            foreach($pagos as $pago){
               echo "<li>$pago->id - (Deudor: $pago->deudor) - (Cuota: $pago->cuota) - (Cuota Capital: $pago->cuota_capital) - (Fecha De Pago: $pago->fecha_pago)</li>"; 
            }
        echo "</ul>";

        // esta es solo una forma para ver si me trae bien la fila de la base de datos
        // echo "<pre>";
        // var_dump($pagos);
        // echo "<pre>";
    }

    function addRecord(){
        $nombre = $_POST['nombre'];
        $cuota = $_POST['cuota'];
        $cuota_capital = $_POST['cuota_capital'];
        $fecha_pago = $_POST['fecha_pago'];
        insertRecord($nombre, $cuota,$cuota_capital,$fecha_pago);
    }