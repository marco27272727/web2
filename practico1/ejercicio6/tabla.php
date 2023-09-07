<?php require './layout/head.php'?>

<?php
    //validacion
    if(empty($_POST["limite"])){
        echo "<p>Debe enviar un valor</p>";
    }
    if(empty($_POST["limite"] <= 0)){
        echo "<p>Debe enviar un valor mayor a 0</p>";
    }

    $numero = $_POST["limite"];    
?>

<table>
    <tbody>
        <?php for($i = 1; $i <= $numero; $i++){?>
            <tr>
                <?php for($j = 1; $j <= $numero; $j++){ ?>
                    <td <?php if(($i==1) || ($j==1) || ($i == $j)) {echo 'class="high-light"';}?>>
                        <?php echo($i*$j)?>
                    </td>
                <?php }?>
            </tr>
        <?php }?>
    </tbody>
</table>

<?php require './layout/footer.php'?>
