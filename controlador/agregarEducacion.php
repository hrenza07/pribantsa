<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once('../modelo/include_dao.php');
$transaction = new Transaction();
$educacion = new TblEducacion();
$educacion->titulo = $_POST['titulo_educacion'];
$educacion->fechaInicio = date("Y-m-d", strtotime($_POST['fecha_inicio_educacion']));
$educacion->fechaFin = date("Y-m-d", strtotime($_POST['fecha_fin_educacion']));
$educacion->idEmpleado = $_POST['empleado_educacion'];
DAOFactory::getTbleducacionDAO()->insert($educacion);
$transaction->commit();
echo 'Educacion agregada al Empleado';
header("Location: ../vista/menu.php");
?>