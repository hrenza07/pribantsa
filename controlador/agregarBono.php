<?php
	require_once('../modelo/include_dao.php');
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	$transaction = new Transaction();
	$bono = new TblTipoBono();
	$bono->monto = $_POST['monto_bono'];
	$bono->porcentaje = $_POST['porcentaje_bono'];
	$bono->nombre = $_POST['nombre_bono'];
	$bono->idPuestoTrabajo = $_POST['puesto_puestoTrabajo'];
	DAOFactory::getTblTipoBonoDAO()->insert($bono);
	$transaction->commit();
	echo 'Tipo de Bono creado con exito';
	header("Location: ../vista/menu.php");
?>