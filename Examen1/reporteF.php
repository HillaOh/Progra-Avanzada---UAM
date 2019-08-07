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
			
			Inicio: <input type="date" id="dt_fechainicio" data-date-format="dd-mm-yyyy"> Final: <input type="date" id="dt_fechafinal" data-date-format="dd-mm-yyyy"></br></br>
			<input type="button" id="btn_buscar" onclick="" value="Buscar"></br>
			<table border="1" align="center">
				<tr>
					<td colspan="8">REPORTE DE FACTURAS</td>
				</tr>
				<tr>
					<td>Factura</td>
					<td>Fecha</td>
					<td>Hora</td>
					<td>Numero de Orden</td>
					<td>Sbtotal</td>
					<td>Impuesto de Servicio</td>
					<td>IVA</td>
					<td>Total</td>
				</tr>

				<?php 

				$sql= "SELECT * FROM tbl_facturas";
				$result = mysqli_query($conn, $sql);

				while($mostrar=mysqli_fetch_array($result)){
				?>

				<tr>
					
					<td><?php echo $mostrar['idFactura'] ?></td>
					<td><?php echo $mostrar['dFecha'] ?></td>
					<td><?php echo $mostrar['tHora'] ?></td>
					<td><?php echo $mostrar['iNumeroOrden'] ?></td>
					<td><?php echo $mostrar['dSubtotal'] ?></td>	
					<td><?php echo $mostrar['dImpuestoServicio'] ?></td>
					<td><?php echo $mostrar['dIVA'] ?></td>
					<td><?php echo $mostrar['dTotal'] ?></td>
				</tr>
				<?php 
				}
				 ?>
			</table>
		</BR></br>
		<table border="1" align="center">
			Inicio: <input type="month" id="mp_fechainicio"> Final: <input type="month" id="mp_fechafinal" data-date-format="dd-mm-yyyy"></br>
			<input type="button" id="btn_buscar" onclick="" value="Buscar"></br>
			<td colspan="8">REPORTE DE FACTURAS</td>
				</tr>
				<tr>
					<td>Factura</td>
					<td>Fecha</td>
					<td>Hora</td>
					<td>Numero de Orden</td>
					<td>Sbtotal</td>
					<td>Impuesto de Servicio</td>
					<td>IVA</td>
					<td>Total</td>
				</tr>

				<?php 

				$sql= "SELECT * FROM tbl_facturas";
				$result = mysqli_query($conn, $sql);

				while($mostrar=mysqli_fetch_array($result)){
				?>

				<tr>
					
					<td><?php echo $mostrar['idFactura'] ?></td>
					<td><?php echo $mostrar['dFecha'] ?></td>
					<td><?php echo $mostrar['tHora'] ?></td>
					<td><?php echo $mostrar['iNumeroOrden'] ?></td>
					<td><?php echo $mostrar['dSubtotal'] ?></td>	
					<td><?php echo $mostrar['dImpuestoServicio'] ?></td>
					<td><?php echo $mostrar['dIVA'] ?></td>
					<td><?php echo $mostrar['dTotal'] ?></td>
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