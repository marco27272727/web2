<?php
    if(!isset($_GET["developer"])){
        $developer = $_GET["developer"];

        if ($developer === 'juan') {
            echo '<p>Esta calculadora fue desarrollada por Juan.</p>';
        } else {
            echo '<p>Esta calculadora fue desarrollada por un equipo de desarrolladores.</p>';
        }
    }
?>