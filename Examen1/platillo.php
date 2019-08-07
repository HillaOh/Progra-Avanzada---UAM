<?php

$nombrePlatillo = $_POST['nombrePlatillo'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
$presentacion = $_POST['presentacion'];
$boton = $_POST['boton'];
$respuesta = "";
$dbhost = "localhost:3306";
$dbuser = "root";
$dbname = "examen1_db";

if ($boton == "guardarPlatillos") {
	$conn = mysqli_connect($dbhost, $dbuser, "", $dbname);
	if (!$conn) {
		$respuesta = mysql_error();
	}
	else {
		$result = mysqli_query($conn, "INSERT INTO tbl_platillos (vNombre, dPrecio, vDescripcion, vPresentacion) VALUES ('$nombrePlatillo', '$precio', '$descripcion', '$presentacion')") or die ("Error al guardar");
			$respuesta = "Datos guardados correctamente";
	}
	mysqli_close($conn); 	
} else if ($boton == "eliminarPlatillos") {
	$conn = mysqli_connect($dbhost, $dbuser, "", $dbname);
	if (!$conn) {
		$respuesta = mysql_error();
	}
	else {
		$result = mysqli_query($conn, "DELETE FROM tbl_platillos WHERE vNombre = '$nombrePlatillo'") or die ("Error al eliminar");
	$respuesta = "Datos eliminados correctamente";
	}
	mysqli_close($conn); 
} else if ($boton == "actualizarPlatillo") {

	$conn = mysqli_connect($dbhost, $dbuser, "", $dbname);
	if (!$conn) {
		$respuesta = mysql_error();
	} else {

		$result = mysqli_query($conn, "UPDATE tbl_platillos Set dPrecio = '$precio', vDescripcion = '$descripcion', vPresentacion = '$presentacion' WHERE vNombre = '$nombrePlatillo'") or die ("Error al actualizar");

		$respuesta = "Datos actualizados correctamente";
	}

	mysqli_close($conn);

} else {
		$respuesta = "Ocurrio un error";
	}


echo ($respuesta);


 ?>