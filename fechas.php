<?php
require '../vendor/autoload.php'; // Asegúrate de que esta ruta sea correcta
use Carbon\Carbon;

class Fecha {
    public Carbon $NowinLondon; 
    public Carbon $NowinNY; 

    public function __construct() {
        
        $this->NowinLondon = Carbon::now('Europe/London');
        $this->NowinNY = Carbon::now('America/New_York');
    }

    public function TiempoNY() {
       
        echo "Hora en Nueva York: " . $this->NowinNY->toDateTimeString() . "<br/>";
    }

    public function TiempoLondon() {
       
        echo "Hora en Londres: " . $this->NowinLondon->toDateTimeString() . "<br/>";
    }
}




?>