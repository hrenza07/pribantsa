<?php
	require_once('../modelo/include_dao.php');
	$transaction = new Transaction();
	$empleado = new TblEmpleado();
	$empleado->nombre = $_POST['nombre_empleado'];
	$empleado->apellido =$_POST['apellido_empleado'];
	$empleado->sexoempleado = $_POST['sexo_empleado'];
	$empleado->dui = $_POST['dui_empleado'];
	$empleado->isss = $_POST['isss_empleado'];
	$empleado->afp = $_POST['afp_empleado'];
	$empleado->cuenta = $_POST['numerocuenta_empleado'];
	$empleado->salario = $_POST['salario_empleado'];
	$empleado->fechaNacimiento = $_POST['fechanacimiento_empleado'];
	DAOFactory::getTblEmpleadoDAO()->insert($empleado);
	$transaction->commit();
	echo 'Exito-'; 
?>
