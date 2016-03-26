<?php
	require_once('../modelo/include_dao.php');
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	$transaction = new Transaction();
	$vacacion = new TblVacacion();
	$vacacion->idEmpleado = $_POST['empleado_vacacion'];
	$fecha_inicio = $_POST['fecha_inicio_vacacion'];
	$fecha_fin = $_POST['fecha_fin_vacacion'];
	$fecha_inicio = date("Y-m-d", strtotime($fecha_inicio));
	$fecha_fin = date("Y-m-d", strtotime($fecha_fin));
	$vacacion->fechaInicio = $fecha_inicio;
	$vacacion->fechaFin = $fecha_fin;
	DAOFactory::getTblvacacionDAO()->insert($vacacion);
	$transaction->commit();
	echo 'Vacacion agregada con exito';
	header("Location: ../vista/menu.php");
?>