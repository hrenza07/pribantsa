<html>
<head>
  <link rel="stylesheet" href="../js/jquery/jquery-ui.css">
  <script src="../js/jquery-1.10.2/jquery-1.9.1.js"></script>
  <script src="../js/jquery/jquery-ui.js"></script>
<script>
    $(function() {
    $( "#datepicker" ).datepicker();
  });
</script>
</head>
<body>
<h1>Agregar Empleado</h1>
<table>
<form method="post" action="../controlador/agregarEmpleado.php">
<tr>
<td>Nombres:</td><td><input type="text" name="nombre_empleado"></td>
</tr>
<tr>
<td>Apellidos:</td><td><input type="text" name="apellido_empleado"></td>
</tr>
<tr>
<td>Sexo:</td><td><input type="radio" name="sexo_empleado" value="Masculino">M
                  <input type="radio" name="sexo_empleado" value="Femenino" checked>F</td>
</tr>
<tr>
<td>DUI:</td><td><input type="text" name="dui_empleado"></td>
</tr>
<tr>
<td>ISSS:</td><td><input type="text" name="isss_empleado"></td>
</tr>
<tr>
<td>AFP:</td><td><input type="text" name="afp_empleado"></td>
</tr>
<tr>
<td>Numero de Cuenta:</td><td><input type="text" name="numerocuenta_empleado"></td>
</tr>
<tr>
<td>Salario:</td><td><input type="text" name="salario_empleado"></td>
</tr>
<tr>
<td>Fecha de Nacimiento:</td><td><input id="datepicker" type="text" name="fechanacimiento_empleado"></td>
</tr>
<tr>
<td><input type="submit" value="Enviar"></td><td><input type="reset" value="Limpiar"></td>
</tr>
</form>
</table>
</body>
</html>