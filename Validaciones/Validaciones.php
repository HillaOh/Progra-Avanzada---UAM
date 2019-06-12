<?php 
$usuario = $_GET['usuarioA'];
$password = $_GET['passwordA'];
$email = $_GET['emailA'];
$fechaNac = $_GET['fechaA'];
$respuesta = "";

if ( $usuario == "" && $password == "" && $email == "" && $fechaNac == "") {
	$respuesta .= "Debe llenar todos los campos";
} else {
	$respuesta .= $usuario. ", ". $password. ", ". $email. ", ". $fechaNac;
}

echo $respuesta;

?>