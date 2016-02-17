<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once('../modelo/include_dao.php');
$transaction = new Transaction();
$puesto = new TblPuestoTrabajo();
$puesto->nombre = $_POST['nombre_puestoTrabajo'];
$puesto->descripcion = $_POST['descripcion_puestoTrabajo'];
$puesto->salarioMin = $_POST['salarioMin_puestoTrabajo'];
$puesto->salarioMax = $_POST['salarioMax_puestoTrabajo'];
$puesto->idDepartamento = $_POST['idDepartamento_puestoTrabajo'];
DAOFactory::getTblPuestoTrabajoDAO()->insert($puesto);
$transaction->commit();
echo 'Puesto agregado con exito';
header("Location: ../vista/menu.php");
?>