<?php
	require_once('../modelo/include_dao.php');
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	$transaction = new Transaction();
	$permiso = new TblPermiso();
	$permiso->idEmpleado = $_POST['empleado_permiso'];
	$permiso->tipoPermiso = $_POST['tipo_permiso_permiso'];
	if (isset($_POST['remunerado_permiso'])) {
		$permiso->remunerado = 1;
	}else{
		$permiso->remunerado = 0;
	}
	//$permiso->remunerado = $_POST['remunerado_permiso'];

	$fecha_inicio = $_POST['fecha_inicio_permiso'];
	$fecha_fin = $_POST['fecha_fin_permiso'];
	$fecha_inicio = date("Y-m-d", strtotime($fecha_inicio));
	$fecha_fin = date("Y-m-d", strtotime($fecha_fin));
	$permiso->inicio = $fecha_inicio.' '.$_POST['hora_inicio_permiso'];
	$permiso->fin = $fecha_fin.' '.$_POST['hora_fin_permiso'];
	DAOFactory::getTblPermisoDAO()->insert($permiso);
	$transaction->commit();
	echo 'Permiso agregado con exito';
	header("Location: ../vista/menu.php");
?>