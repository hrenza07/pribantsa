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
    var1 = document.getElementById("monto_bono").value;
    if(var1!=''){
        document.getElementById("porcentaje_bono").disabled = true;
    }else{
        document.getElementById("porcentaje_bono").disabled = false;
    }
}
function deshabilitarMonto(){
    var2 = document.getElementById("porcentaje_bono").value;
    if(var2!=''){
        document.getElementById("monto_bono").disabled = true;
    }else{
        document.getElementById("monto_bono").disabled = false;
    }
}
</script>
</head>    
<body>
<div id="content">
<form method="post" action="../controlador/agregarBono.php" class="formularios">
  <ul>
    <li>
         <h2>Agregar Bono</h2>
    </li>
    <li>
         <label for="nombre_bono" class ="labelNormal">Nombre:</label>
         <input type="text" name="nombre_bono" />
    </li>
    <li>
         <label for="monto_bono" class ="labelNormal">Monto:</label>
         <input type="number" max="500" name="monto_bono" id="monto_bono" onkeydown="deshabilitarPorcentaje();"/>
    </li>
    <li>
         <label for="porcentaje_bono" class ="labelNormal">Porcentaje:</label>
         <input type="number" min="0" max="100" name="porcentaje_bono" id="porcentaje_bono" onkeydown="deshabilitarMonto();"/>%
    </li>
    <li>
         <label for="puesto_puestoTrabajo" class ="labelNormal">Puesto:</label>
         <select name="puesto_puestoTrabajo">
        <?php
            $puestos = DAOFactory::getTblPuestoTrabajoDAO()->queryAll();
            for ($i=0; $i < count($puestos); $i++) { 
                $fila = $puestos[$i];
                echo '<option value='.$fila->idPuestoTrabajo.'>'.$fila->nombre.'</option>';
            }
        ?>
         </select>
    </li>
    <li>
    <button class="submit" type="submit" value="enviar">Guardar</button>
    </li>
</ul>
</form>
</div>
</body>
</html>
