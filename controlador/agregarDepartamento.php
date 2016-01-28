<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once('../modelo/include_dao.php');
$transaction = new Transaction();
$departamento = new TblDepartamento();
echo $_POST['nombre_departamento'];
echo $_POST['descripcion_departamento'];
$departamento->nombre = $_POST['nombre_departamento'];
$departamento->descripcion = $_POST['descripcion_departamento'];
DAOFactory::getTblDepartamentoDAO()->insert($departamento);
$transaction->commit();
echo 'Departamento agregado con exito';
?>
