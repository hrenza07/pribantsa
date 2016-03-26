<html>
<head>
</head>
<body>
<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	require_once('../modelo/include_dao.php');
	$transaction = new Transaction();
	$empleado = new TblEmpleado();
	$empleado->nombre = strtoupper($_POST['nombre_empleado']);
	$empleado->apellido = strtoupper($_POST['apellido_empleado']);
	$empleado->sexoempleado = $_POST['sexo_empleado'];
	$empleado->dui = $_POST['dui_empleado'];
	$empleado->nit = $_POST['nit_empleado'];
	$empleado->isss = $_POST['isss_empleado'];
	$empleado->afp = $_POST['afp_empleado'];
	$empleado->cuenta = $_POST['numerocuenta_empleado'];
	$empleado->salario = $_POST['salario_empleado'];
	$fecha = $_POST['fecha_ano'].'-'.$_POST['fecha_mes'].'-'.$_POST['fecha_dia'];
	//$fecha = date("Y-m-d", strtotime($fecha) );
	$empleado->fechaNacimiento = $fecha;
	$empleado->idPuestoTrabajo = $_POST['puesto_empleado'];
	DAOFactory::getTblEmpleadoDAO()->insert($empleado);
	$usuario = new TblUsuario();
	$apellido1 = explode(" ", $empleado->apellido);
	$fecha1 = explode("-", $fecha);
	$usuario->usuario = strtoupper(substr($empleado->nombre, 0,1).$apellido1[0]).$fecha1[2];
	$usuario->idEmpleado = $empleado->idEmpleado;
	$usuario->contrasena = md5($usuario->usuario);
	$usuario->privilegio = 5;
	DAOFactory::getTblUsuarioDAO()->insert($usuario);
	$transaction->commit();
	echo '<script language="JavaScript" type="text/javascript">

var pagina="../vista/form_agregarEmpleado.php";
alert("Usuario:'.$usuario->usuario.'");
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 2000);

</script>';
//header('Location: ../vista/form_agregarEmpleado.php');
?>
</body>
</html>