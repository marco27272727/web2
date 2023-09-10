<?php require './layout/head.php'?>
    <h1>Tabla de Multiplicar</h1>
    <form action="tabla" method="post">
        <label for="limite">Limite de la tabla</label>
        <input type="number" name="limite" id="limite">
        <input type="submit" value="Generar tabla">
    </form>
<? require './layout/footer.php'?>