<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once('../modelo/include_dao.php');
$transaction = new Transaction();
$sancion = new TblSancion();
$sancion->gravedad = $_POST['gravedad_sancion'];
$sancion->descripcion = $_POST['descripcion_sancion'];
$sancion->fecha = date("Y-m-d", strtotime($_POST['fecha_sancion']));
$sancion->idEmpleado = $_POST['empleado_sancion'];
DAOFactory::getTblSancionDAO()->insert($sancion);
$transaction->commit();
echo 'Sancion agregada al Empleado';
header("Location: ../vista/menu.php");
?>