<?php

trait Turbo {
    public function boost() {
        echo "S'ha iniciat el turbo.<br/>";
    }
}


class Car {
    public $marca;
    public $matricula;
    public $combustible;
    public $velocitatMaxima;

   //Afegim el trait turbo dins la classe Car
    use Turbo;

    public function __construct($marca, $matricula, $combustible, $velocitatMaxima) {
        $this->marca = $marca;
        $this->matricula = $matricula;
        $this->combustible = $combustible;
        $this->velocitatMaxima = $velocitatMaxima;
    }


    public function mostrarCoche() {
        echo "Marca: " . $this->marca . "<br/>";
        echo "Matricula: " . $this->matricula . "<br/>";
        echo "Combustible: " . $this->combustible . "<br/>";
        echo "Velocitat maxima: " . $this->velocitatMaxima . " km/h<br/>";
    }
}


?>