<html>
<head>
</head>
<body>
<h1>Agregar Capacitacion de Empleado</h1>
<table>
<form method="post" action="../controlador/agregarCapacitacion.php">
<tr>
<td>Nombre:</td><td><input type="text" name="nombre_capacitacion"></td>
</tr>
<tr>
<td>Lugar:</td><td><input type="text" name="lugar_capacitacion"></td>
</tr>
<tr>
<td>Fecha de Inicio:</td><td><input type="date" name="fechainicio_capacitacion"></td>
</tr>
<tr>
<td>Fecha de Finalizacion:</td><td><input type="date" name="fechafinalizacion_capacitacion"></td>
</tr>
<tr>
<td>Descripcion:</td><td><textarea name="descripcion_capacitacion">
</textarea></td>
</tr>
<tr>
<td><input type="submit" value="Enviar"></td><td><input type="reset" value="Limpiar"></td>
</tr>
</form>
</table>
</body>
</html>