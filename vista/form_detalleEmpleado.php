<?php
	require_once('../modelo/include_dao.php');
	require_once('menu.php');
?>
<html>
<head>
	<link rel="stylesheet" href="form_detalleEmpelado.css">
</head>
<body>
<?php
	$empleadoid = $_GET['id'];
	$empleado = DAOFactory::getTblEmpleadoDAO()->load($empleadoid);
?>
<table width="75%" align="center" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
<fieldset>
<legend> Informacion General </legend>
<table>
<tr>
<td><label class="labelNormal">Nombres:</label></td>
<td><label><?php echo $empleado->nombre.' '.$empleado->apellido; ?></label></td>
</tr>
<tr>
<td><label class="labelNormal">DUI:</label></td>
<td><label><?php echo $empleado->dui; ?></label></td>
</tr>
<tr>
<td><label class="labelNormal">NIT:</label></td>
<td><label><?php echo $empleado->nit; ?></label></td>
</tr>
<tr>
<td><label class="labelNormal">ISSS:</label></td>
<td><label><?php echo $empleado->isss; ?></label></td>
</tr>
<tr>
<td><label class="labelNormal">AFP:</label></td>
<td><label><?php echo $empleado->afp; ?></label></td>
</tr>
<tr>
<td><label class="labelNormal">Cuenta:</label></td>
<td><label><?php echo $empleado->cuenta; ?></label></td>
</tr>
<tr>
<td><label class="labelNormal">Fecha Naciemieto:</label></td>
<td><label><?php echo $empleado->fechaNacimiento; ?></label></td>
</tr>
</table>
</fieldset>
</td>
</tr>
<tr>
<td>
<fieldset>
<legend> Organizacion </legend>
<?php
	$puesto = DAOFactory::getTblPuestoTrabajoDAO()->load($empleado->idPuestoTrabajo);
	$departamento = DAOFactory::getTblDepartamentoDAO()->load($puesto->idDepartamento); ?>

<table>
<tr>
<td><label class="labelNormal">Departamento:</label></td>
<td><label><?php echo $departamento->nombre; ?></label></td>
</tr>
<tr>
<td><label class="labelNormal">Puesto:</label></td>
<td><label><?php echo $puesto->nombre; ?></label></td>
</tr>
<tr>
<td><label class="labelNormal">Descripcion:</label></td>
<td><label><?php echo $puesto->descripcion; ?></label></td>
</tr>
<tr>
<td><label class="labelNormal">Salario:</label></td>
<td><label><?php echo $empleado->salario; ?></label></td>
</tr>
</table>
</fieldset>
</tr>
</td>
<tr>
<td>
<fieldset>
<legend> Educacion </legend>
<?php
	$educacion = DAOFactory::getTblEducacionDAO()->queryByIdEmpleado($empleadoid);
	for ($i=0; $i < count($educacion); $i++) { 
		$fila_educacion = $educacion[$i]; ?>
<table>
<tr>
<td><label class="labelNormal">Titulo:</label></td>
<td><label><?php echo $fila_educacion->titulo; ?></label></td>
</tr>
<tr>
<td><label class="labelNormal">Fecha de Inicio:</label></td>
<td><label><?php echo $fila_educacion->fechaInicio; ?></label></td>
</tr>
<tr>
<td><label class="labelNormal">Fecha de Finlizacion:</label></td>
<td><label><?php echo $fila_educacion->fechaFin; ?></label></td>
</tr>
</table>
<hr style="width:300px;">
<?php } ?>

</fieldset>
</tr>
</td>
<tr>
<td>
<fieldset>
<legend> Capacitaciones </legend>

<?php
	$capacitacion = DAOFactory::getTblCapacitacionDAO()->queryByIdEmpleado($empleadoid);
	for ($j=0; $j < count($capacitacion); $j++) { 
		$fila_capacitacion = $capacitacion[$j]; ?>

<table>
<tr>
<td><label class="labelNormal">Nombre:</label></td>
<td><label><?php echo $fila_capacitacion->nombre; ?></label></td>
</tr>
<tr>
<td><label class="labelNormal">Descripcion:</label></td>
<td><label><?php echo $fila_capacitacion->descripcion; ?></label></td>
</tr>
<tr>
<td><label class="labelNormal">Lugar:</label></td>
<td><label><?php echo $fila_capacitacion->lugar; ?></label></td>
</tr>
<tr>
<td><label class="labelNormal">	Fecha de Inicio:</label></td>
<td><label><?php echo $fila_capacitacion->fechaInicio; ?></label></td>
</tr>
<tr>
<td><label class="labelNormal">Fecha de Finalizacion:</label></td>
<td><label><?php echo $fila_capacitacion->fechaFin; ?></label></td>
</tr>
</table>
<hr style="width:300px;">

<?php } ?>


</fieldset>
</tr>
</td>
<tr>
<td>
<fieldset>
<legend> Reconocimientos </legend>
<?php
	$reconocimiento = DAOFactory::getTblReconocimientoDAO()->queryByIdEmpleado($empleadoid);
	for ($k=0; $k < count($reconocimiento); $k++) { 
		$fila_reconocimiento = $reconocimiento[$k]; ?>

<table>
<tr>
<td><label class="labelNormal">Descripcion:</label></td>
<td><label><?php echo $fila_reconocimiento->descripcion; ?></label></td>
</tr>
</table>
<hr style="width:300px;">
<?php } ?>
</fieldset>
</tr>
</td>
</table>
</body>
</html>