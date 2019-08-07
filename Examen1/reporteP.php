<?php

$dbhost = "localhost:3306";
$dbuser = "root";
$dbname = "examen1_db";

$conn = mysqli_connect($dbhost, $dbuser, "", $dbname);
if (!$conn) {
		$respuesta = mysql_error();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Facturacion</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<form class="form_reporteCliente" id="form_reporteCliente">
		<h1 style="color: #0B0B61" align="center">Restaurante Mi Angora</h1></br>

		<div class="reportePlatillos">
			
			<table border="1">
				<tr>
					<td colspan="5">REPORTE DE PLATILLOS</td>
				</tr>
				<tr>
					<td>ID</td>
					<td>Nombre de Platillo</td>
					<td>Precio</td>
					<td>Descripcion</td>
					<td>Presentacion</td>
				</tr>

				<?php 

				$sql= "SELECT * FROM tbl_platillos";
				$result = mysqli_query($conn, $sql);

				while($mostrar=mysqli_fetch_array($result)) {
				?>

				<tr>
					<td><?php echo $mostrar['idPlatillos'] ?></td>
					<td><?php echo $mostrar['vNombre'] ?></td>
					<td><?php echo $mostrar['dPrecio'] ?></td>
					<td><?php echo $mostrar['vDescripcion'] ?></td>
					<td><?php echo $mostrar['vPresentacion'] ?></td>
				</tr>
				<?php 
				}
				 ?>
			</table>
			<a href="paginaReportes.html"><input type="button" id="btnVolver" value="Regregar"></a>
		</div>
	</form>
</body>
</html>