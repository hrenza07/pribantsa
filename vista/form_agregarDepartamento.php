<?php
 require_once('menu.php');
?>
<html>
<head>
	<link rel="stylesheet" href="formularios.css">
</head>
<div id="content">
<form method="post" action="../controlador/agregarDepartamento.php" class="formularios">
  <ul>
    <li>
         <h2>Datos Generales del Departamento</h2>
    </li>
    <li>
         <label for="nombre_departamento" class ="labelNormal">Nombre:</label>
         <input type="text" name="nombre_departamento" />
    </li>
    <li>
        <label for="descripcion_departamento" class ="labelNormal">Descripcion:</label>
        <textarea name="descripcion_departamento" cols="40" rows="6"></textarea>
    </li>
    <li>
    <button class="submit" type="submit" value="enviar">Guardar</button>
    </li>
</ul>
</form>
</div>
</body>
</html>
