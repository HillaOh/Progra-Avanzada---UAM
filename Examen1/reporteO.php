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
			
			Seleccione un Estado: <input type="text" id="lst_estado" placeholder="seleccione" list="lsEstados">
			<datalist id="lsEstados">
				<option value="P">
				<option value="R">
				<option value="C">
				<option value="L">
				<option value="E">	
			</datalist>
			<input type="button" id="btn_buscar" onclick="" value="Buscar"></br>
			<table border="1" align="center">
				<tr>
					<td colspan="7">REPORTE DE ORDENES</td>
				</tr>
				<tr>
					<td>Numero de Orden</td>
					<td>Fecha</td>
					<td>Hora</td>
					<td>Mesa</td>
					<td>ID de Cliente</td>
					<td>ID del Platillo</td>
					<td>cEstado</td>
				</tr>

				<?php 
				
				$estado = "P";
				
				$sql= "SELECT * FROM tbl_ordenes WHERE cEstado = '$estado'";
				$result = mysqli_query($conn, $sql);

				while($mostrar=mysqli_fetch_array($result)){
				?>

				<tr>
					
					<td><?php echo $mostrar['idOrdenes'] ?></td>
					<td><?php echo $mostrar['dFecha'] ?></td>
					<td><?php echo $mostrar['tHora'] ?></td>
					<td><?php echo $mostrar['tiNumeroMesa'] ?></td>
					<td><?php echo $mostrar['iCliente'] ?></td>		
					<td><?php echo $mostrar['iPlatillos'] ?></td>
					<td><?php echo $mostrar['cEstado'] ?></td>
					
				</tr>
				<?php 
				}
				 ?>
			</table>
		</BR>
		<table border="1" align="center">
				<tr>
					<td colspan="7">REPORTE DE ORDENES</td>
				</tr>
				<tr>
					<td>Numero de Orden</td>
					<td>Fecha</td>
					<td>Hora</td>
					<td>Mesa</td>
					<td>ID de Cliente</td>
					<td>ID del Platillo</td>
					<td>cEstado</td>
				</tr>

				<?php 
				
				$estado = "R";
				
				$sql= "SELECT * FROM tbl_ordenes WHERE cEstado = '$estado'";
				$result = mysqli_query($conn, $sql);

				while($mostrar=mysqli_fetch_array($result)){
				?>

				<tr>
					
					<td><?php echo $mostrar['idOrdenes'] ?></td>
					<td><?php echo $mostrar['dFecha'] ?></td>
					<td><?php echo $mostrar['tHora'] ?></td>
					<td><?php echo $mostrar['tiNumeroMesa'] ?></td>
					<td><?php echo $mostrar['iCliente'] ?></td>		
					<td><?php echo $mostrar['iPlatillos'] ?></td>
					<td><?php echo $mostrar['cEstado'] ?></td>
					
				</tr>
				<?php 
				}
				 ?>
			</table>
		</BR>
			<table border="1" align="center">
				<tr>
					<td colspan="7">REPORTE DE ORDENES</td>
				</tr>
				<tr>
					<td>Numero de Orden</td>
					<td>Fecha</td>
					<td>Hora</td>
					<td>Mesa</td>
					<td>ID de Cliente</td>
					<td>ID del Platillo</td>
					<td>cEstado</td>
				</tr>

				<?php 
				
				$estado = "C";
				
				$sql= "SELECT * FROM tbl_ordenes WHERE cEstado = '$estado'";
				$result = mysqli_query($conn, $sql);

				while($mostrar=mysqli_fetch_array($result)){
				?>

				<tr>
					
					<td><?php echo $mostrar['idOrdenes'] ?></td>
					<td><?php echo $mostrar['dFecha'] ?></td>
					<td><?php echo $mostrar['tHora'] ?></td>
					<td><?php echo $mostrar['tiNumeroMesa'] ?></td>
					<td><?php echo $mostrar['iCliente'] ?></td>		
					<td><?php echo $mostrar['iPlatillos'] ?></td>
					<td><?php echo $mostrar['cEstado'] ?></td>
					
				</tr>
				<?php 
				}
				 ?>
			</table>
		</BR>
		<table border="1" align="center">
				<tr>
					<td colspan="7">REPORTE DE ORDENES</td>
				</tr>
				<tr>
					<td>Numero de Orden</td>
					<td>Fecha</td>
					<td>Hora</td>
					<td>Mesa</td>
					<td>ID de Cliente</td>
					<td>ID del Platillo</td>
					<td>cEstado</td>
				</tr>

				<?php 
				
				$estado = "L";
				
				$sql= "SELECT * FROM tbl_ordenes WHERE cEstado = '$estado'";
				$result = mysqli_query($conn, $sql);

				while($mostrar=mysqli_fetch_array($result)){
				?>

				<tr>
					
					<td><?php echo $mostrar['idOrdenes'] ?></td>
					<td><?php echo $mostrar['dFecha'] ?></td>
					<td><?php echo $mostrar['tHora'] ?></td>
					<td><?php echo $mostrar['tiNumeroMesa'] ?></td>
					<td><?php echo $mostrar['iCliente'] ?></td>		
					<td><?php echo $mostrar['iPlatillos'] ?></td>
					<td><?php echo $mostrar['cEstado'] ?></td>
					
				</tr>
				<?php 
				}
				 ?>
			</table>
		</BR>
			<table border="1" align="center">
				<tr>
					<td colspan="7">REPORTE DE ORDENES</td>
				</tr>
				<tr>
					<td>Numero de Orden</td>
					<td>Fecha</td>
					<td>Hora</td>
					<td>Mesa</td>
					<td>ID de Cliente</td>
					<td>ID del Platillo</td>
					<td>cEstado</td>
				</tr>

				<?php 
				
				$estado = "E";
				
				$sql= "SELECT * FROM tbl_ordenes WHERE cEstado = '$estado'";
				$result = mysqli_query($conn, $sql);

				while($mostrar=mysqli_fetch_array($result)){
				?>

				<tr>
					
					<td><?php echo $mostrar['idOrdenes'] ?></td>
					<td><?php echo $mostrar['dFecha'] ?></td>
					<td><?php echo $mostrar['tHora'] ?></td>
					<td><?php echo $mostrar['tiNumeroMesa'] ?></td>
					<td><?php echo $mostrar['iCliente'] ?></td>		
					<td><?php echo $mostrar['iPlatillos'] ?></td>
					<td><?php echo $mostrar['cEstado'] ?></td>
					
				</tr>
				<?php 
				}
				 ?>
			</table>
			<a href="paginaReportes.html"><input type="button" id="btnVolver" value="Regregar"></a></br>
		</div>
	</form>
</body>
</html>