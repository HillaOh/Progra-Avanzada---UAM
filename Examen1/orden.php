<?php 

$idOrden = $_POST['idOrden']; 
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$mesa = $_POST['mesa'];
$cliente = $_POST['cliente'];
$platillos = $_POST['platillos'];
$estado = $_POST['estado'];
$boton = $_POST['boton'];
$respuesta = "";
$dbhost = "localhost:3306";
$dbuser = "root";
$dbname = "examen1_db";

if ($boton == "guardarOrden") {
	$conn = mysqli_connect($dbhost, $dbuser, "", $dbname);
	if (!$conn) {
		$respuesta = mysql_error();
	} else {
		$result = mysqli_query($conn, "SELECT (idClientes) FROM tbl_clientes WHERE vNombreCompleto = '$cliente'") or die ("Error de idCliente");
		$idCliente = mysqli_fetch_assoc($result);
		$strCliente = implode($idCliente);

		$result = mysqli_query($conn, "SELECT (idPlatillos) FROM tbl_platillos WHERE vNombre = '$platillos'") or die ("Error de idPlatillo");
		$idPlatillo = mysqli_fetch_assoc($result);
		$strPlatillo = implode($idPlatillo);


		$result = mysqli_query($conn, "INSERT INTO tbl_ordenes(dFecha, tHora, tiNumeroMesa, iCliente, iPlatillos, cEstado) VALUES ('$fecha', '$hora', '$mesa', '$strCliente', '$strPlatillo', '$estado')") or die ("Error al guardar");
		$respuesta = "Datos guardados correctamente";

	}
	mysqli_close($conn);

} else if ($boton == "eliminarOrden") {
	$conn = mysqli_connect($dbhost, $dbuser, "", $dbname);
	if (!$conn) { 
		$respuesta = mysql_error();
	}
	else {

		$result = mysqli_query($conn, "DELETE FROM tbl_ordenes WHERE idOrdenes = '$idOrden'") or die ("Error al eliminar");

	$respuesta = "Datos eliminados correctamente";
	}
	mysqli_close($conn); 
} else if ($boton == "actualizarOrden") {
	
	$conn = mysqli_connect($dbhost, $dbuser, "", $dbname);
	if (!$conn) {
		$respuesta = mysql_error();
	} else {

		$result = mysqli_query($conn, "UPDATE tbl_ordenes Set dFecha = '$fecha', tHora = '$hora', tiNumeroMesa = '$mesa', cEstado = '$estado' WHERE idOrdenes = '$idOrden'") or die ("Error al actualizar");

		$respuesta = "Datos actualizados correctamente";
	}

	mysqli_close($conn);
} else {
	$respuesta = "Ocurrio un error";
}

echo ($respuesta);





?>