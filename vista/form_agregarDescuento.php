<?php
    require_once('../modelo/include_dao.php');
    require_once('menu.php');
?>
<html>
<head>
    <link rel="stylesheet" href="formularios.css">
    <link rel="stylesheet" href="../js/jquery/jquery-ui.css">
  <script src="../js/jquery-1.10.2/jquery-1.9.1.js"></script>
  <script src="../js/jquery/jquery-ui.js"></script>
  <script>
    $(function() {
    $( "#datepicker" ).datepicker();
  });
</script>
<script>
function deshabilitarPorcentaje(){
    var1 = document.getElementById("monto_descuento").value;
    if(var1!=''){
        document.getElementById("porcentaje_descuento").disabled = true;
    }else{
        document.getElementById("porcentaje_descuento").disabled = false;
    }
}
function deshabilitarMonto(){
    var2 = document.getElementById("porcentaje_descuento").value;
    if(var2!=''){
        document.getElementById("monto_descuento").disabled = true;
    }else{
        document.getElementById("monto_descuento").disabled = false;
    }
}
</script>
</head>    
<body>
<div id="content">
<form method="post" action="../controlador/agregarDescuento.php" class="formularios">
  <ul>
    <li>
         <h2>Crear Descuento</h2>
    </li>
    <li>
         <label for="nombre_descuento" class ="labelNormal">Nombre:</label>
         <input type="text" name="nombre_descuento" />
    </li>
    <li>
         <label for="monto_descuento" class ="labelNormal">Monto:</label>
         <input type="number" max="500" name="monto_descuento" id="monto_descuento" onkeydown="deshabilitarPorcentaje();"/>
    </li>
    <li>
         <label for="porcentaje_descuento" class ="labelNormal">Porcentaje:</label>
         <input type="number" min="0" max="100" name="porcentaje_descuento" id="porcentaje_descuento" onkeydown="deshabilitarMonto();"/>%
    </li>
    <li>
    <button class="submit" type="submit" value="enviar">Guardar</button>
    </li>
</ul>
</form>
</div>
</body>
</html>
