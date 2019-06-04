<?php
 
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$signo = $_GET['signooperador'];
$respuesta = "";

if (!ctype_digit($numero1) || !ctype_digit($numero2 )) {
    $respuesta .= "Solo se permiten numeros"; 
}else if ($numero2 == 0) {
    $respuesta .= "El segundo numero no puede ser 0";
}elseif ($signo == "") {
	$respuesta .= "Debe seleccionar una operacion";
}
else{
    switch ($signo) {
    	case 'sumar':
    		$respuesta .= $numero1. " + ". $numero2. " = ".($numero1+$numero2);
    		break;
    	case 'restar':
    		$respuesta .= $numero1. " - ". $numero2. " = ".($numero1-$numero2);
    		break;
    	case 'multiplicar':
    		$respuesta .= $numero1. " x ". $numero2. " = ".($numero1*$numero2);
    		break;
    	case 'dividir':
    		$respuesta .= $numero1. " / ". $numero2. " = ".($numero1/$numero2);
    		break;
    	default:
    		$respuesta .= "Error en la operacion";
    		break;
        }
}
echo $respuesta;

?>