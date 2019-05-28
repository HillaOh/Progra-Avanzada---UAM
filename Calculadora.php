<?php
 
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$respuesta = "";

if (!ctype_digit($numero1) || !ctype_digit($numero2 )) {
    $respuesta .= "Solo se permiten numeros"; 
}else if ($numero2 == 0) {
    $respuesta .= "El segundo numero no puede ser 0";
}else{
    $respuesta .= "<table>";
    $respuesta .= "<tr><td>".$numero1. " + ". $numero2. " = ".($numero1+$numero2) ."</td></tr>";
    $respuesta .= "<tr><td>".$numero1. " - ". $numero2. " = ".($numero1-$numero2) ."</td></tr>";
    $respuesta .= "<tr><td>".$numero1. " x ". $numero2. " = ".($numero1*$numero2) ."</td></tr>";
    $respuesta .= "<tr><td>".$numero1. " / ". $numero2. " = ".($numero1/$numero2) ."</td></tr>";
    $respuesta .= "</table>";
}
echo $respuesta;

?>