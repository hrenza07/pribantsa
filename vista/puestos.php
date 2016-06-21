<html>
<head>
</head>
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once('../modelo/include_dao.php');
$q = intval($_GET['q']);
$puestos = DAOFactory::getTblPuestoTrabajoDAO()->queryByIdDepartamento($q);
//echo '<select name="puesto_empleado" id="puesto">';
for ($i=0; $i < count($puestos); $i++) { 
	$row = $puestos[$i];
	echo '<option value="'.$row->idPuestoTrabajo.'">'.$row->nombre.'</option>';
}
//echo '</select>';
?>
</body>
</html>