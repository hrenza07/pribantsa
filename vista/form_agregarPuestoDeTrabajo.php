<html>
<head>
</head>
<body>
<h1>Agregar Puesto de Trabajo</h1>
<table>
<form method="post" action="../controlador/agregarPuestoDeTrabajo.php">
<tr>
<td>Nombre:</td><td><input type="text" name="nombre_puestodetrabajo"></td>
</tr>
<tr>
<td>Salario Minimo:</td><td><input type="text" name="salarioMin_puestodetrabajo"></td>
</tr>
<tr>
<td>Salario Maximo:</td><td><input type="text" name="salarioMax_puestodetrabajo"></td>
</tr>
<tr>
<td>Descripcion:</td><td><textarea name="descripcion_puestodetrabajo">
</textarea></td>
</tr>
<tr>
<td><input type="submit" value="Enviar"></td><td><input type="reset" value="Limpiar"></td>
</tr>
</form>
</table>
</body>
</html>
