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
					<td colspan="9">REPORTE DE CLIENTES</td>
				</tr>
				<tr>
					<td>ID</td>
					<td>Cedula</td>
					<td>Nombre</td>
					<td>Telefono</td>
					<td>Email</td>
					<td>Direccion</td>
					<td>Provincia</td>
					<td>Canton</td>
					<td>Distrito</td>
				</tr>

				<?php 

				$sql= "SELECT * FROM tbl_clientes";
				$result = mysqli_query($conn, $sql);

				while($mostrar=mysqli_fetch_array($result)) {
				?>

				<tr>
					<td><?php echo $mostrar['idClientes'] ?></td>
					<td><?php echo $mostrar['iCedula'] ?></td>
					<td><?php echo $mostrar['vNombreCompleto'] ?></td>
					<td><?php echo $mostrar['vTelefono'] ?></td>
					<td><?php echo $mostrar['vCorreo'] ?></td>
					<td><?php echo $mostrar['vDireccion'] ?></td>
					<td><?php echo $mostrar['vProvincia'] ?></td>
					<td><?php echo $mostrar['vCanton'] ?></td>
					<td><?php echo $mostrar['vDistrito'] ?></td>
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