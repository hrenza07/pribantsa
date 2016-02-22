<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once('../modelo/include_dao.php');
$transaction = new Transaction();
$capacitacion = new TblCapacitacion();
$capacitacion->nombre = $_POST['nombre_capacitacion'];
$capacitacion->descripcion = $_POST['descripcion_capacitacion'];
$capacitacion->lugar = $_POST['lugar_capacitacion'];
$capacitacion->fechaInicio = $_POST['fechainicio_capacitacion'];
$capacitacion->fechaFin = $_POST['fechafin_capacitacion'];
$capacitacion->idEmpleado = $_POST['idEmpleado_capacitacion']; 
DAOFactory::getTblCapacitacionDAO()->insert($capacitacion);
$transaction->commit();
echo 'capacitacion agregado con exito';
header("Location: ../vista/menu.php");
?>