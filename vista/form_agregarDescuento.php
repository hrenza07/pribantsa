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
<form method="post" action="../controlador/agregarDescuento.php" class="formularios">
  <ul>
    <li>
         <h2>Agregar Descuento</h2>
    </li>
    <li>
         <label for="monto_descuento" class ="labelNormal">Monto:</label>
         <input type="text" name="monto_descuento" />
    </li>
    <li>
         <label for="porcentaje_descuento" class ="labelNormal">Porcentaje:</label>
         <input type="text" name="porcentaje_descuento" />
    </li>
     <li>
         <label for="fecha_descuento" class ="labelNormal">Fecha:</label>
         <input id="datepicker" type="text" name="fecha_descuento" />
    </li>
    <li>
        <label for="descripcion_descuento" class ="labelNormal">Descripcion:</label>
        <textarea name="descripcion_descuento" cols="40" rows="6"></textarea>
    </li>
    <li>
    <button class="submit" type="submit" value="enviar">Guardar</button>
    </li>
</ul>
</form>
</div>
</body>
</html>