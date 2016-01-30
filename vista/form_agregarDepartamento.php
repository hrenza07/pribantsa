<?php
 require_once('menu.php');
?>
<html>
<head>
</head>
<body>
<h1>Agregar Departamento</h1>
<table>
<form method="post" action="../controlador/agregarDepartamento.php">
<tr>
<td>Nombre:</td><td><input type="text" name="nombre_departamento"></td>
</tr>
<tr>
<td>Descripcion:</td><td><textarea name="descripcion_departamento">
</textarea></td>
</tr>
<tr>
<td><input type="submit" value="Enviar"></td><td><input type="reset" value="Limpiar"></td>
</tr>
</form>
</table>
</body>
</html>
