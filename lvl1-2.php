<?php

class sample {

    public int $nivel = 1000;
    public string $nombre = "Goku";

    public function demo() {
        echo "Linia:  " .__LINE__ . "<br/>";
        echo "Fichero: ".__FILE__ . "<br/>";
        echo "Nombre de la Funcion: ".__FUNCTION__. "<br/>";
        echo "Clase: " .__CLASS__ . "<br/>";
        echo "Función: " .__FUNCTION__. "<br/>";


    }

   

   


}

$prueba = new sample;
echo $prueba->demo();









?>