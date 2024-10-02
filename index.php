<?php

//exercici2 -lvl1

include "magicals.php";

$prueba = new sample;
echo $prueba->demo();



    //exercici3
include "magician.php";

    echo "<br/><br/>";
    $config = new magical();
    $config->DB = "mongoDB"; // Llama a __set()
    echo $config->DB; // Llama a __get()
    echo "<br/><br/>";
    
//nivell 2 - Exercici1
//Crea una classe que representi un recurs didactic d'aquesta especialitat
//un URL i un tipus de recurs (Fitxer, article web, video). Implementa tan el tema com el tipus de 
//recurs amb enums

include "DidacticRecurse.php";


// Ejemplo de uso
$titulo = "Intro a PHP";
$tema = Tema::PHP;
$url = "https://www.freecodecamp.org/news/the-best-php-examples/";
$tipoRecurso = TipoRecurso::ArticleWeb;

$NewP = new RecursoDidactico($titulo, $tema, $url, $tipoRecurso);
$NewP->mostrarRecurso();
echo "<br/><br/>";



//nivell 2 - Exericici 2
//implementa una classe car que tingui info sobre un cotxe
//marca,matricula,tipus combustible,velocitat maxima
//a mes implementa un trait anomenat Turbo que tingui un metode boost()
//que mostri un missatge "S'ha iniciat el turbo. Usa aquest metode des de la classe car.

include "cotxes.php";

$coche = new Car("Tesla", "1234-XYZ", "Elèctric", 250);

$coche->mostrarCoche();
$coche->boost();
echo "<br/><br/>";




//Nivell 3
include "fechas.php";

$fecha = new Fecha();
$fecha->TiempoNY();
echo "<br/>";  
$fecha->TiempoLondon();













?>