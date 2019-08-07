<?php 

$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion  = $_POST['direccion'];
$provincia = $_POST['provincia'];
$canton = $_POST['canton'];
$distrito = $_POST['distrito'];
$boton = $_POST['boton'];
$respuesta = "";
$dbhost = "localhost:3306";
$dbuser = "root";
$dbname = "examen1_db";


if ($boton == "nuevoCliente") 
{
	$conn = mysqli_connect($dbhost, $dbuser, "", $dbname);
	if (!$conn) {
		$respuesta = mysql_error();
	} else {
		$result = mysqli_query($conn, "INSERT INTO tbl_clientes (vNombreCompleto, iCedula, vTelefono, vCorreo, vDireccion, vProvincia, vCanton, vDistrito) VALUES ('$nombre', '$cedula', '$telefono', '$correo', '$direccion', '$provincia', '$canton', '$distrito')") or die ("Error al guardar");
		$respuesta = "Datos guardados correctamente";
	}
	mysqli_close($conn); 
} else if ($boton == "eliminarCliente") {
	$conn = mysqli_connect($dbhost, $dbuser, "", $dbname);
	if (!$conn) {
		$respuesta = mysql_error();
	}
	else {
		$result = mysqli_query($conn, "DELETE FROM tbl_clientes WHERE iCedula = '$cedula'") or die ("Error al eliminar");

	$respuesta = "Datos eliminados correctamente";
	}
	mysqli_close($conn); 
} else if ($boton == "actualizarCliente") {
	
	$conn = mysqli_connect($dbhost, $dbuser, "", $dbname);
	if (!$conn) {
		$respuesta = mysql_error();
	}
	else {

		$result = mysqli_query($conn, "SELECT (idClientes) FROM tbl_clientes WHERE iCedula = '$cedula'") or die ("Error de idCliente");
		$idCliente = mysqli_fetch_assoc($result);
		$strCliente = implode($idCliente);

		$result = mysqli_query($conn, "UPDATE tbl_clientes Set vNombreCompleto = '$nombre', vTelefono = '$telefono', vCorreo = '$correo', vDireccion = '$direccion', vProvincia = '$provincia', vCanton = '$canton', vDistrito = '$distrito' WHERE idClientes = '$strCliente'") or die ("Error al actualizar");

		$respuesta = "Datos actualizados correctamente";
	}
	mysqli_close($conn);
} else {
	$respuesta = "Ocurrio un error";
}

echo ($respuesta);
?>