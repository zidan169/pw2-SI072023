<?php
    require_once 'class_kasus.php';

    $rangka = new piano("piano", "senar", 6);
    $stick = new drum("drum", "piano", 5);

    echo "Info piano:<br>";
    $rangka->getInfo();
    echo "<br>";

    echo "Info harga piano:<br>";
    $stick->getInfo();
?>