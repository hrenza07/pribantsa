<html>
<head>
</head>
<body>
<h1>Agregar Permiso</h1>
<table>
<form method="post" action="../controlador/agregarPermiso.php">
<tr>
<td>Hora de Salida</td><td><input type="date" name="horasalida_permiso"></td>
</tr>
<tr>
<td>Hora de Entrada</td><td><input type="date" name="horaentrada_permiso"></td>
</tr>
<tr>
<td>Remunerado</td><td><input type="text" name="remunerado_permiso"></td>
</tr>
<tr>
<td>Descripcion:</td><td><textarea name="descripcion_permiso">
</textarea></td>
</tr>
<tr>
<td><input type="submit" value="Enviar"></td><td><input type="reset" value="Limpiar"></td>
</tr>
</form>
</table>
</body>
</html>