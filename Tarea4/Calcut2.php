<?php 
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$signo = $_POST['sig'];
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
    		$respuesta .= "El resultado de la suma es ".($numero1+$numero2);
    		break;
    	case 'restar':
    		$respuesta .= "El resultado de la resta es ".($numero1-$numero2);
    		break;
    	case 'multiplicar':
    		$respuesta .= "El resultado de la multiplicacion es ".($numero1*$numero2);
    		break;
    	case 'dividir':
    		$respuesta .= "El resultado de la division es ".($numero1/$numero2);
    		break;
    	default:
    		$respuesta .= "Error en la operacion";
    		break;
        }
}
echo ($respuesta);

?>