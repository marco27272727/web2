<?php
    function getConection(){
        return new PDO('mysql:host=localhost;dbname=practico3;charset=utf8','root','');
    }

    function getList(){
        // 1) Abro una conexion con la base de datos
        $db = getConection();
        // 2) Envio la consulta y obtenemos el resultado 
        $query = $db->prepare('SELECT * FROM pagos');
        $query->execute();
        
        //obtengo todos los datos que arroja la query
        $pagos = $query->fetchAll(PDO::FETCH_OBJ);
        return $pagos;
    }

    //  este es el ejercicio c)
    function insertRecord($nombre, $cuota,$cuota_capital,$fecha_pago){
        $db = getConection();

        $query = $db->prepare('INSERT INTO pagos(deudor, cuota, cuota_capital, fecha_pago) VALUE(?,?,?,?)');
        $query->execute([$nombre, $cuota,$cuota_capital,$fecha_pago]);
    }