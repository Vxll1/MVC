<?php
    require_once 'carro.php';
    $carroEspecial1 = new Carro("Amarillo", "Audi", "A5", 800, 200, 5);
    $carroEspecial2 = new Carro("Morado", "Camaro", "ZL1", 900, 500, 2);
    $carroEspecial3 = new Carro("Negro", "Ferrari", "AV", 800, 500, 2);
    $carroEspecial4 = new Carro("Lila", "Mercedes", "Z1", 800, 200, 5);

    var_dump($carroEspecial1);
    var_dump($carroEspecial2);
    var_dump($carroEspecial3);
    var_dump($carroEspecial4);
?>