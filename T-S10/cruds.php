<?php

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editorial = $_POST['editorial'];
$precio = $_POST['precio'];
$boton = $_POST['boton'];
$respuesta = "";

$dbhost = "localhost:3306";
$dbuser = "root";
$dbname = "semana12_db";


if ($boton == "nuevo") 
{
	$conn = mysqli_connect($dbhost, $dbuser, "", $dbname);
	if (!$conn) {
		$respuesta = mysql_error();
	} else {
		$result = mysqli_query($conn, "INSERT INTO tbl_libros (vTitulo, vAutor, vEditorial, dPrecio) VALUES ('$titulo', '$autor', '$editorial', '$precio')") or die ("Error al guardar");
		$respuesta = "Libro Registrado Correctamente";
	}
	mysqli_close($conn); 
} else if ($boton == "eliminar") {
	
	$conn = mysqli_connect($dbhost, $dbuser, "", $dbname);
	if (!$conn) {
		$respuesta = mysql_error();
	}
	else {
		$result = mysqli_query($conn, "DELETE FROM tbl_libros WHERE vTitulo = '$titulo'") or die ("Error al eliminar");

	$respuesta = "Libro Eliminado Correctamente";
	}
	mysqli_close($conn); 
} else if ($boton == "actualizar") {
	
	$conn = mysqli_connect($dbhost, $dbuser, "", $dbname);
	if (!$conn) {
		$respuesta = mysql_error();
	}
	else {

		$result = mysqli_query($conn, "SELECT (idLibro) FROM tbl_libros WHERE vTitulo = '$titulo'") or die ("Error de idLibro");
		$idLibro = mysqli_fetch_assoc($result);
		$strLibro = implode($idLibro);

		$result = mysqli_query($conn, "UPDATE tbl_libros Set vTitulo = '$titulo', vAutor = '$autor', vEditorial = '$editorial', dPrecio = '$precio' WHERE idLibro = '$strLibro'") or die ("Error al actualizar");

		$respuesta = "Datos actualizados correctamente";
	}
	mysqli_close($conn);
} else {
	$respuesta = "Ocurrio un error";
}

echo ($respuesta);



?>
