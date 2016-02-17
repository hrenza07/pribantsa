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
<form method="post" action="../controlador/agregarEducacion.php" class="formularios">
  <ul>
    <li>
         <h2>Capacitacion de Empleados</h2>
    </li>
    <li>
         <label for="titulo_educacion" class ="labelNormal">Titulo:</label>
         <input type="text" name="titulo_educacion" />
    </li>
     <li>
         <label for="fechainicio_educacion" class ="labelNormal">Fecha de inicio:</label>
         <input id="datepicker" type="text" name="fechainicio_educacion" />
    </li>
     <li>
         <label for="fechafin_educacion" class ="labelNormal">Fecha de Finalizacion:</label>
         <input  id="datepicker_2" type="text" name="fechafin_educacion" />
    </li>
    <li>
        <label for="descripcion_educacion" class ="labelNormal">Descripcion:</label>
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