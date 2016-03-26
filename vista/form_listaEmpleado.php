<?php
	require_once('../modelo/include_dao.php');
	require_once('menu.php');
?>
<html>
<head>
<link rel="stylesheet" href="tabla.css">
</head>
<body>
<div class="datagrid">
<form method="post" action="form_editarEmpleado.php">
<table>
<thead>
<tr>
<th>ID</th>
<th>Empleado</th>
<th>Departamento</th>
<th>Puesto Trabajo</th>
<th>Opciones</th>
</tr>
</thead>
<tbody>
<?php
	$empleado = DAOFactory::getTblEmpleadoDAO()->queryAllOrderBy("apellido");
	for ($i=0; $i < count($empleado); $i++) { 
		$row = $empleado[$i];
		echo '<tr>';
			echo '<td>'.$row->idEmpleado.'</td>';
			echo '<td>'.$row->apellido.', '.$row->nombre.'</td>';
			$puesto = DAOFactory::getTblPuestoTrabajoDAO()->load($row->idPuestoTrabajo);
			$departamento = DAOFactory::getTblDepartamentoDAO()->load($puesto->idDepartamento);
			echo '<td>'.$departamento->nombre.'</td>';
			echo '<td>'.$puesto->nombre.'</td>';
			echo '<td><a href="form_detalleEmpleado.php?id='.$row->idEmpleado.'">Detalles</a></td>';
		echo '</tr>';
	}
?>
</tbody>
</table>
</form>
</div>
</body>
</html>