<?php
	require_once('../modelo/include_dao.php');
	require_once('menu.php');
?>
<html>
<head>
</head>
<body>
<?php
	$empleadoid = $_GET['id'];
	$empleado = DAOFactory::getTblEmpleadoDAO()->load($empleadoid);
?>
<h3>Informacion General</h3>
<?php
	echo 'Nombre: '.$empleado->nombre.' '.$empleado->apellido;
	echo '<br>DUI: '.$empleado->dui;
	echo '<br>NIT: '.$empleado->nit;
	echo '<br>ISSS: '.$empleado->isss;
	echo '<br>AFP: '.$empleado->afp;
	echo '<br>Cuenta: '.$empleado->cuenta;
	echo '<br>Fecha de Nacimiento: '.$empleado->fechaNacimiento;
?>
<h3>Organizacion</h3>
<?php
	$puesto = DAOFactory::getTblPuestoTrabajoDAO()->load($empleado->idPuestoTrabajo);
	$departamento = DAOFactory::getTblDepartamentoDAO()->load($puesto->idDepartamento);
	echo 'Departamento: '.$departamento->nombre;
	echo '<br>Puesto: '.$puesto->nombre;
	echo '<br>Descripcion: '.$puesto->descripcion;
	echo '<br>Salario: $'.$empleado->salario;
?>
<h3>Educacion</h3>
<?php
	$educacion = DAOFactory::getTblEducacionDAO()->queryByIdEmpleado($empleadoid);
	for ($i=0; $i < count($educacion); $i++) { 
		$fila_educacion = $educacion[$i];
		echo 'Titulo: '.$fila_educacion->titulo;
		echo '<br>Fecha de Inicio: '.$fila_educacion->fechaInicio;
		echo '<br>Fecha de Finalizacion: '.$fila_educacion->fechaFin;
		echo '<hr style="width:300px;">';
	}
?>
<h3>Capacitaciones</h3>
<?php
	$capacitacion = DAOFactory::getTblCapacitacionDAO()->queryByIdEmpleado($empleadoid);
	for ($j=0; $j < count($capacitacion); $j++) { 
		$fila_capacitacion = $capacitacion[$j];
		echo 'Nombre: '.$fila_capacitacion->nombre;
		echo '<br>Descripcion: '.$fila_capacitacion->descripcion;
		echo '<br>Lugar: '.$fila_capacitacion->lugar;
		echo '<br>Fecha de Inicio: '.$fila_capacitacion->fechaInicio;
		echo '<br>Fecha de Finalizacion: '.$fila_capacitacion->fechaFin;
		echo '<hr style="width:300px;">';
	}
?>
<h3>Reconocimientos</h3>
<?php
	$reconocimiento = DAOFactory::getTblReconocimientoDAO()->queryByIdEmpleado($empleadoid);
	for ($k=0; $k < count($reconocimiento); $k++) { 
		$fila_reconocimiento = $reconocimiento[$k];
		echo 'Descripcion: '.$fila_reconocimiento->descripcion;
		echo '<hr style="width:300px;">';
	}
?>
</body>
</html>