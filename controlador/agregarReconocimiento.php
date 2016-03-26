<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once('../modelo/include_dao.php');
$transaction = new Transaction();
$reconocimiento = new TblReconocimiento();
$reconocimiento->descripcion = $_POST['descripcion_reconocimiento'];
$reconocimiento->idEmpleado = $_POST['empleado_reconocimiento']; 
DAOFactory::getTblReconocimientoDAO()->insert($reconocimiento);
$transaction->commit();
echo 'Reconocimiento agregado con exito';
header("Location: ../vista/menu.php");
?>