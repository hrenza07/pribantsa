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
    $(function() {
    $( "#datepicker2" ).datepicker();
  });
</script>
</head>
<body>
<form method="post" action="../controlador/agregarPermiso.php" autocomplete="off">
Empleado:
<select name="empleado_permiso">
<?php
	$empleados = DAOFactory::getTblEmpleadoDAO()->queryAll();
	for ($i=0; $i < count($empleados); $i++) { 
		$fila = $empleados[$i];
		echo '<option value="'.$fila->idEmpleado.'">'.$fila->apellido.', '.$fila->nombre.'</option>';
	}
?>
</select>
<br>
Fecha/Hora de Inicio:
<input type="text" id="datepicker" name="fecha_inicio_permiso">
<input type="text" name="hora_inicio_permiso" placeholder="14:30">
<br>
Fecha/Hora de Fin:
<input type="text" id="datepicker2" name="fecha_fin_permiso">
<input type="text" name="hora_fin_permiso" placeholder="16:30">
<br>
Tipo de Permiso:
<input type="text" name="tipo_permiso_permiso" placeholder="PERSONAL">
<br>
Permiso Remunerado:
<input type="checkbox" name="remunerado_permiso">
<br>
<input type="submit" value="Enviar">
</form>
</body>
</html>