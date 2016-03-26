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
<form method="post" action="../controlador/agregarVacacion.php" autocomplete="off">
Empleado:
<select name="empleado_vacacion">
<?php
	$empleados = DAOFactory::getTblEmpleadoDAO()->queryAll();
	for ($i=0; $i < count($empleados); $i++) { 
		$fila = $empleados[$i];
		echo '<option value="'.$fila->idEmpleado.'">'.$fila->apellido.', '.$fila->nombre.'</option>';
	}
?>
</select>
<br>
Fecha de Inicio:
<input type="text" id="datepicker" name="fecha_inicio_vacacion">
<br>
Fecha de Fin:
<input type="text" id="datepicker2" name="fecha_fin_vacacion">
<br>
<input type="submit" value="Enviar">
</form>
</body>
</html>