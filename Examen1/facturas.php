<?php 

$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$numOrden = $_POST['numOrden'];
$subtotal = $_POST['subtotal'];
$impServicio = $_POST['impServicio'];
$IVA = $_POST['IVA'];
$total = $_POST['total'];
$boton = $_POST['boton'];
$respuesta = "";
$dbhost = "localhost:3306";
$dbuser = "root";
$dbname = "examen1_db";

//ACTUALIZAR CON NUM DE ORDEN

if ($boton == "guardarFactura") {
	$conn = mysqli_connect($dbhost, $dbuser, "", $dbname);
	if (!$conn) {
		$respuesta = mysql_error();
	} else {
		$IVA = ($subtotal*0.13);
		$impServicio = ($subtotal*0.10);
		$total = ($subtotal+$IVA+$impServicio);
		$result = mysqli_query($conn, "INSERT INTO tbl_facturas(dFecha, tHora, iNumeroOrden, dSubtotal, dImpuestoServicio, dIVA, dTotal) VALUES ('$fecha', '$hora', '$numOrden', '$subtotal', '$impServicio', '$IVA', '$total')") or die ("Error al guardar");

		$respuesta .= " Datos guardados. Total: ". $total;
	}
	mysqli_close($conn);

} else if ($boton == "eliminarFactura") {
	
	$conn = mysqli_connect($dbhost, $dbuser, "", $dbname);
	if (!$conn) { 
		$respuesta = mysql_error();
	}
	else {

		$result = mysqli_query($conn, "DELETE FROM tbl_facturas WHERE iNumeroOrden = '$numOrden'") or die ("Error al eliminar");

	$respuesta = "Datos eliminados correctamente";
	}
	mysqli_close($conn); 

} else if ($boton == "actualizarFactura") {
	
	$conn = mysqli_connect($dbhost, $dbuser, "", $dbname);
	if (!$conn) {
		$respuesta = mysql_error();
	} else {

		$result = mysqli_query($conn, "UPDATE tbl_platillos Set dFecha = '$fecha', tHora = '$hora', dSubtotal = '$subtotal', dImpuestoServicio = '$impServicio', dIVA = '$IVA', dTotal ='$total' WHERE iNumeroOrden = '$numOrden'") or die ("Error al actualizar");

		$respuesta = "Datos actualizados correctamente";
	}

	mysqli_close($conn);


} else {
	$respuesta = "NADA";
}

echo ($respuesta);


?>