<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Libreria</title>	
	<link rel="stylesheet" href="estilos.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
		<script type="text/javascript">
		$(document).ready(function(){
            $("#btn_nuevo").click(function(evento){evento.preventDefault();
                $("#informacion").load("cruds.php", {titulo: document.getElementById("txt_titulo").value, autor: document.getElementById("txt_autor").value, editorial: document.getElementById("cmb_editorial").value, precio: document.getElementById("txt_precio").value, boton: "nuevo"}, function(){alert("Verificando datos...");
                });
            });
        });

        $(document).ready(function(){
            $("#btn_actualizar").click(function(evento){evento.preventDefault();
                $("#informacion").load("cruds.php", {titulo: document.getElementById("txt_titulo").value, autor: document.getElementById("txt_autor").value, editorial: document.getElementById("cmb_editorial").value, precio: document.getElementById("txt_precio").value, boton: "actualizar"}, function(){alert("Verificando datos...");
                });
            });
        });
        
        $(document).ready(function(){
            $("#btn_eliminar").click(function(evento){evento.preventDefault();
                $("#informacion").load("cruds.php", {titulo: document.getElementById("txt_titulo").value, autor: document.getElementById("txt_autor").value, editorial: document.getElementById("cmb_editorial").value, precio: document.getElementById("txt_precio").value, boton: "eliminar"}, function(){alert("Verificando datos...");
                });
            });
        });
	</script>
</head>
<body>
	<form id="formLibreria">
		<div class="datosLibs">
			Titulo: <input type="text" id="txt_titulo" placeholder="Titulo Libro" required></br>
			Autor: <input type="text" id="txt_autor" placeholder="Autor Libro" required></br>
			Editorial: <select id="cmb_editorial" name="cmb_editorial">
			<?php
				$dbhost = "localhost:3306";
				$dbuser = "root";
				$dbname = "semana12_db";
				$respuesta = "";
				$consultar = "";
				$conn = mysqli_connect($dbhost, $dbuser, "", $dbname);
				if (!$conn) {
					$respuesta = mysql_error();
				}else{
					$consultar = mysqli_query($conn, "SELECT * FROM tbl_editoriales") or die ("Error al cargar");
				}
			?>
			<?php foreach ($consultar as $opciones): ?>
				<option value="<?php echo $opciones['vNombreEditorial']?>"><?php echo $opciones['vNombreEditorial']?></option>	
			<?php endforeach ?>
						
			</select></br>
			Precio: <input type="number" id="txt_precio" required></br>
			<input type="button" id="btn_nuevo" onclick="" value="Nuevo">
			<input type="button" id="btn_actualizar" onclick="" value="Actualizar">
			<input type="button" id="btn_eliminar" onclick="" value="Eliminar"></br>
			<a href="paginaCRUDs.html"><input type="button" id="btn_regresar" onclick="" value="Regresar"></a>
		</div>
		<div id="informacion"></div>
	</form>
	

</body>
</html>
