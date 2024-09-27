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

    //exercici2
    class magical {
        private $ajustes = [];
    
        public function __get($name) {
            return $this->ajustes[$name] ?? null;
        }
    
        public function __set($name, $value) {
            $this->ajustes[$name] = $value;
        }
    }
    echo "<br/><br/>";
    $config = new magical();
    $config->DB = "mongoDB"; // Llama a __set()
    echo $config->DB; // Llama a __get()
    















?>