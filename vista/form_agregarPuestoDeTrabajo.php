<?php 
    require_once('menu.php');
    require_once('../modelo/include_dao.php');
?>
<html>
<head>
    <link rel="stylesheet" href="formularios.css">
</head>    
<body>
<div id="content">
<form method="post" action="../controlador/agregarPuestoTrabajo.php" class="formularios">
  <ul>
    <li>
         <h2>Datos Generales del Puesto de Trabajo</h2>
    </li>
    <li>
         <label for="idDepartamento_puestoTrabajo" class ="labelNormal">Departamento:</label>
         <select name="idDepartamento_puestoTrabajo">
         <?php 
            $departamentos = DAOFActory::getTblDepartamentoDAO()->queryAll();
            for ($i=0; $i < count($departamentos); $i++) { 
                $row = $departamentos[$i];
                echo '<option value='.$row->idDepartamento.'>'.$row->nombre.'</option>';
            }
            
         ?>
         </select>
    </li>
    <li>
         <label for="nombre_puestoTrabajo" class ="labelNormal">Puesto:</label>
         <input type="text" name="nombre_puestoTrabajo" />
    </li>
     <li>
         <label for="salarioMin_puestoTrabajo" class ="labelNormal">Salario Minimo($):</label>
         <input type="text" name="salarioMin_puestoTrabajo" />
    </li>
     <li>
         <label for="salarioMax_puestoTrabajo" class ="labelNormal">Salario Maximo($):</label>
         <input type="text" name="salarioMax_puestoTrabajo" />
    </li>
    <li>
        <label for="descripcion_puestoTrabajo" class ="labelNormal">Descripcion:</label>
        <textarea name="descripcion_puestoTrabajo" cols="40" rows="6"></textarea>
    </li>
    <li>
    <button class="submit" type="submit" value="enviar">Guardar</button>
    </li>
</ul>
</form>
</div>
</body>
</html>