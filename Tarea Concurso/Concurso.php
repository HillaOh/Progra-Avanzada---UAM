<?php

$datosPersona = ['firstname1' => "", 'lastname1' => "", 'lastname2' => ""];
 if (array_key_exists('txt_cedula', $_GET)) {
     $cedula = $_GET['txt_cedula'];
     $wsurl = 'https://apis.gometa.org/cedulas/' .$cedula;
     if($results = file_get_contents($wsurl)){
        $datosPersona = json_decode($results);
     }
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        Concurso
    </title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        
        function Guarda()
        {
            alert("Datos de "+ document.getElemtById("txt_cedula") + " guardados!");
        }


        $(document).ready(function(){
            $("#btn_buscar").click(function(){
                var solicitarDatos = $("#txt_cedula").val();
                var resultado = $("#informacion");
                $.ajax({
                    url: "https://apis.gometa.org/cedulas/";
                    method: "get",
                    data: {},
                    dataType: "json",
                    success: function(data){
                        
                        resultado.html("Nombre: " + data.results[0].firstname1);
                    }
                });
            });
        });

    </script>
    <script>
            $(document).ready(function () {
                $("#btn_buscar").click(function (evento) {
                    $.ajax({
                        dataType: "json",
                        url: "https://ubicaciones.paginasweb.cr/provincias.json",
                        data: {},
                        success: function (data) {
                            var html = "<select>";
                            for(key in data) {
                                html += "<option value='"+key+"'>"+data[key]+"</option>";
                            }
                            html += "</select";
                            $('#cmb_provincia').html(html);
                        }
                    });
                });
     
            });

            $(document).ready(function () {
                $("#cmb_provincia").change(function (evento) {
                    $.ajax({
                        dataType: "json",
                        url: "https://ubicaciones.paginasweb.cr/provincia/1/cantones.json",
                        data: {},
                        success: function (data) {
                            var html = "<select>";
                            for(key in data) {
                                html += "<option value='"+key+"'>"+data[key]+"</option>";
                            }
                            html += "</select";
                            $('#cmb_canton').html(html);
                        }
                    });
                });
            });

            $(document).ready(function () {
                $("#cmb_canton").change(function (evento) {
                    $.ajax({
                        dataType: "json",
                        url: "https://ubicaciones.paginasweb.cr/provincia/1/canton/15/distritos.json",
                        data: {},
                        success: function (data) {
                            var html = "<select>";
                            for(key in data) {
                                html += "<option value='"+key+"'>"+data[key]+"</option>";
                            }
                            html += "</select";
                            $('#cmb_distrito').html(html);
                        }
                    });
                });
            });
        </script>
</head>
<body>
    <form class="form_Concurso" id="form_Concurso">


        <h1 style="color: #0B0B61" align="center">C O N C U R S O</h1>

        <div class="datosClientes">
            <fieldset>
                <table>
                    <tr>
                        <td>Cédula</td>
                        <td><input type="number" id="txt_cedula" placeholder="Cédula Nacional" required></td>
                        <td><input type="button" id="btn_buscar" onclick="" value="Buscar"></td>
                    </tr>
                    <tr>
                        <td>Nombre</td>
                        <td><input type="text" id="txt_nombre" placeholder="Nombre de Pila" readonly value="<?php echo $datosPersona['firstname1']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Primer Apellido</td>
                        <td><input type="text" id="txt_apellido1" placeholder="Primer Apellido" readonly value="<?php echo $datosPersona['lastname1']; ?>"></br></td>
                    </tr>
                    <tr>
                        <td>Segundo Apellido</td>
                        <td><input type="text" id="txt_apellido2" placeholder="Segundo Apellido" readonly value="<?php echo $datosPersona['lastname2']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Telefono</td>
                        <td><input type="tel" id="txt_telefono" placeholder="Telefono"></td>
                    </tr>
                </table>
            </fieldset> </br>
            <fieldset>
            Provincia: <select id="cmb_provincia" name="provincia"></select></br>
            Cantón: <select id="cmb_canton"></select></br>
            Distrito: <select id="cmb_distrito"name="canton"></select></br>
            Dirección exacta: <input type="text" id="txt_direccion" placeholder="Dirección exacta"></br>
            <input type="button" id="btn_guardar" onclick=" Guarda()" value="Guardar">
            </fieldset>
        </div>
        <div id="informacion"></div>    
    </form>    
</body>
</html>