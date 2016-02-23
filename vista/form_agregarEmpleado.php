<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
 require_once('menu.php');
 require_once('../modelo/include_dao.php');
?>
<html>
<head>
  <link rel="stylesheet" href="../js/jquery/jquery-ui.css">
  <link rel="stylesheet" href="formularios.css">
  <script src="../js/jquery-1.10.2/jquery-1.9.1.js"></script>
  <script src="../js/jquery/jquery-ui.js"></script>
<script>
    $(function() {
    $( "#datepicker" ).datepicker();
  });
</script>
</head>
<body>
<div id="content">

<form method="post" action="../controlador/agregarEmpleado.php" class="formularios">
<ul>
<h2>Agregar Empleado</h2>
<li><label for="nombre_empleado" class="labelNormal">Nombres:</label><input type="text" name="nombre_empleado"></li>
<li><label for="apellido_empleado" class="labelNormal">Apellidos:</label><input type="text" name="apellido_empleado"></li>
<li><label for="sexo_empleado" class="labelNormal">Sexo:</label><input type="radio" name="sexo_empleado" value="Masculino">M
               <input type="radio" name="sexo_empleado" value="Femenino" checked>F</li>
<li><label for="dui_empleado" class="labelNormal">DUI:</label><input type="text" name="dui_empleado"></li>
<li><label for="isss_empleado" class="labelNormal">ISSS:</label><input type="text" name="isss_empleado"></li>
<li><label for="afp_empleado" class="labelNormal">AFP:</label><input type="text" name="afp_empleado"></li>
<li><label for="cuenta_empleado" class="labelNormal">Numero de Cuenta:</label><input type="text" name="numerocuenta_empleado"></li>
<li><label for="departamento_empleado" class="labelNormal">Departamento:</label>
<select name="departamento" id="departamento">
<?php 
	$departamentos = DAOFactory::getTblDepartamentoDAO()->queryAll();
	for ($i=0; $i < count($departamentos); $i++) { 
		$row = $departamentos[$i];
		echo '<option value="'.$row->idDepartamento.'">'.$row->nombre.'</option>';
	}
?>
</select></li>
<li><label for="salario_empleado" class="labelNormal">Salario:</label><input type="number" step="any" name="salario_empleado"></li></li>
<li><label for="fecha_nacimiento_empleado" class="labelNormal">Fecha de Nacimiento:</label><input id="datepicker" type="text" name="fechanacimiento_empleado"></li>
<li><button class="submit" type="submit" value="enviar">Guardar</button></li>
</ul>
</form>
</div>
</body>
</html>
