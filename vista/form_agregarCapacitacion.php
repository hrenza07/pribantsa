<html>
<head>
    <link rel="stylesheet" href="formularios.css">
    <link rel="stylesheet" href="../js/jquery/jquery-ui.css">
  <script src="../js/jquery-1.10.2/jquery-1.9.1.js"></script>
  <script src="../js/jquery/jquery-ui.js"></script>
  <script>
    $(function() {
    $( "#datepicker" ).datepicker();
    $( "#datepicker_2" ).datepicker();
  });
</script>
</head>    
<body>
<div id="content">
<form method="post" action="../controlador/agregarCapacitacion.php" class="formularios">
  <ul>
    <li>
         <h2>Capacitacion de Empleados</h2>
    </li>
    <li>
         <label for="nombre_capacitacion" class ="labelNormal">Nombre:</label>
         <input type="text" name="nombre_capacitacion" />
    </li>
    <li>
         <label for="lugar_capacitacion" class ="labelNormal">Lugar:</label>
         <input type="text" name="lugar_capacitacion" />
    </li>
     <li>
         <label for="fechainicio_capacitacion" class ="labelNormal">Fecha de inicio:</label>
         <input id="datepicker" type="text" name="fechainicio_capacitacion" />
    </li>
     <li>
         <label for="fechafin_capacitacion" class ="labelNormal">Fecha de Finalizacion:</label>
         <input  id="datepicker_2" type="text" name="fechafin_capacitacion" />
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