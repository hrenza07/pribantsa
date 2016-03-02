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
<form method="post" action="../controlador/agregarBono.php" class="formularios">
  <ul>
    <li>
         <h2>Agregar Bonus</h2>
    </li>
    <li>
         <label for="monto_bono" class ="labelNormal">Monto:</label>
         <input type="text" name="monto_bono" />
    </li>
    <li>
         <label for="porcentaje_bono" class ="labelNormal">Porcentaje:</label>
         <input type="text" name="porcentaje_bono" />
    </li>
     <li>
         <label for="fecha_bono" class ="labelNormal">Fecha:</label>
         <input id="datepicker" type="text" name="fecha_bono" />
    </li>
    <li>
        <label for="descripcion_bono" class ="labelNormal">Descripcion:</label>
        <textarea name="descripcion_bono" cols="40" rows="6"></textarea>
    </li>
    <li>
    <button class="submit" type="submit" value="enviar">Guardar</button>
    </li>
</ul>
</form>
</div>
</body>
</html>