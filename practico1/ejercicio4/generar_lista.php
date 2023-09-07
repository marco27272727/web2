<?php
    $size = $_GET["size"];
?>
    <ul>
        <?php
        for ($i = 1; $i <= $size; $i++) {
        echo "<li>item $i</li>";
        }
        ?>
    </ul>    