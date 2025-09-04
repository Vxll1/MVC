<?php
    // Programación orientada a objetos POO
    // Clases : Es un molde para crear más objetos del mismo tipo

    class Carro{
        // Atributos o propiedades (Variable)
        public $color;
        public $marca;
        public $modelo;
        public $velocidad;
        public $caballaje;
        public $puestos;

    // public function __construct(){
    //     $this->color = "Rojo";
    //     $this->marca = "Ferrari";
    //     $this->modelo = "Aventador";
    //     $this->velocidad = 500;
    //     $this->caballaje = 300;
    //     $this->puestos = 2;
    // }

    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $puestos){
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->puestos = $puestos;
    }
}
?>