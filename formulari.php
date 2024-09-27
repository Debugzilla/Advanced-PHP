<?php

$nombre = $_GET['nombre'];
$asunto = $_GET['asunto'];
$mensaje = $_GET['mensaje'];

session_start();

$_SESSION['edad'] = 25;
$_SESSION['ciudad'] = "Barcelona";
$_SESSION['año'] = "2024";



echo "<h2>Información recibida con PHP</h2>";
echo "El nombre recibido es: " .$nombre . "<br/>";
echo "El asunto recibido es: " .$asunto . "<br/>";
echo "El mensaje recibido es: " .$mensaje . "<br/>";
echo "La edad es: " .$_SESSION['edad'] . "<br/>";
echo "La Ciudad es: " .$_SESSION['ciudad'] . "<br/>";
echo "El año es: " .$_SESSION['año'] . "<br/>";

?>