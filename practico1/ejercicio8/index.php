<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio8</title>
</head>
<body>
    <h1>Calculadora Basica</h1>
    <form action="calcular.php" method="post">
        <input type="text" name="num1" placeholder="Numero 1" require>
        <select name="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <input type="text" name="num2" placeholder="Numero 2" require>
        <input type="submit" value="Calcular">
    </form>

    <hr>

    <nav>
        <ul>
            <li><a href="numero_pi.php">Numero Pi</a></li>
            <li><a href="about.php?developer=juan">Acerca de</a></li>
        </ul>
    </nav>
</body>
</html>