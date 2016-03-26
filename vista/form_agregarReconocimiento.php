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
    $( "#datepicker_2" ).datepicker();
  });
</script>
</head>    
<body>
<div id="content">
<form method="post" action="../controlador/agregarReconocimiento.php" class="formularios">
  <ul>
    <li>
         <h2>Reconocimiento a Empleados</h2>
    </li>
    <li>
         <label for="empleado_reconocimiento" class ="labelNormal">Empleado:</label>
         <select name="empleado_reconocimiento">
         <?php
            $empleados = DAOFactory::getTblEmpleadoDAO()->queryAll();
            for ($i=0; $i < count($empleados); $i++) { 
                $fila = $empleados[$i];
                echo '<option value="'.$fila->idEmpleado.'">'.$fila->apellido.', '.$fila->nombre.'</option>';
            }
         ?>
         </select>
    </li>
    <li>
        <label for="descripcion_reconocimiento" class ="labelNormal">Descripcion:</label>
        <textarea name="descripcion_reconocimiento" cols="40" rows="6"></textarea>
    </li>
    <li>
    <button class="submit" type="submit" value="enviar">Guardar</button>
    </li>
</ul>
</form>
</div>
</body>
</html>