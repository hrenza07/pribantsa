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
<form method="post" action="../controlador/agregarEducacion.php" class="formularios">
  <ul>
    <li>
         <h2>Educacion</h2>
    </li>
    <li>
         <label for="empleado_educacion" class ="labelNormal">Empleado:</label>
         <select name="empleado_educacion">
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
         <label for="titulo_educacion" class ="labelNormal">Titulo:</label>
         <input type="text" name="titulo_educacion" />
    </li>
     <li>
         <label for="fechainicio_educacion" class ="labelNormal">Fecha de inicio:</label>
         <input id="datepicker" type="text" name="fecha_inicio_educacion" />
    </li>
     <li>
         <label for="fechafin_educacion" class ="labelNormal">Fecha de Finalizacion:</label>
         <input  id="datepicker_2" type="text" name="fecha_fin_educacion" />
    </li>
    <li>
    <button class="submit" type="submit" value="enviar">Guardar</button>
    </li>
</ul>
</form>
</div>
</body>
</html>