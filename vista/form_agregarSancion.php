<html>
<head>
    <link rel="stylesheet" href="formularios.css">
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
<div id="content">
<form method="post" action="../controlador/agregarSancion.php" class="formularios">
  <ul>
    <li>
         <h2>Sancion Empleados</h2>
    </li>
    <li>
         <label for="gravedad_sancion" class ="labelNormal">Gravedad:</label>
         <input type="text" name="gravedad_sancion" />
    </li>
     <li>
         <label for="fecha_sancion" class ="labelNormal">Fecha de la Sancion:</label>
         <input id="datepicker" type="text" name="fecha_sancion" />
    </li>
    <li>
        <label for="descripcion_capacitacion" class ="labelNormal">Descripcion:</label>
        <textarea name="descripcion_capacitacion" cols="40" rows="6"></textarea>
    </li>
    <li>
    <button class="submit" type="submit" value="enviar">Guardar</button>
    </li>
</ul>
</form>
</div>
</body>
</html>