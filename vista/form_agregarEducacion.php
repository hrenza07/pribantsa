<html>
<head>
</head>
<body>
<h1>Agregar Educacion de Empleado</h1>
<table>
<form method="post" action="../controlador/agregarEducacion.php">
<tr>
<td>Titulo:</td><td><input type="text" name="titulo_educacion"></td>
</tr>
<tr>
<td>Fecha de Inicio:</td><td><input type="date" name="fechainicio_educacion"></td>
</tr>
<tr>
<td>Fecha de Finalizacion:</td><td><input type="date" name="fechafinalizacion_educacion"></td>
</tr>
<tr>
<td>Descripcion:</td><td><textarea name="descripcion_educacion">
</textarea></td>
</tr>
<tr>
<td><input type="submit" value="Enviar"></td><td><input type="reset" value="Limpiar"></td>
</tr>
</form>
</table>
</body>
</html>