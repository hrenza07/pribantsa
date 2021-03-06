<?php
  require_once('../modelo/include_dao.php');
  require_once('menu.php');
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/cssDashboard.css">
  <link rel="stylesheet" href="../js/jquery/jquery-ui.css">
  <script src="../js/jquery-1.10.2/jquery-1.9.1.js"></script>
  <script src="../js/jquery/jquery-ui.js"></script>
  <script>
    $(function() {
      $( "#datepicker" ).datepicker();
      $( "#datepicker_2" ).datepicker();
    });
  </script>
  <script>
  function mostrarPuestos(str) {
    if (str == "") {
      document.getElementById("txtHint").innerHTML = "";
      return;
    }else {
      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
      }else{
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
        }
      };
      xmlhttp.open("GET","puestos.php?q="+str,true);
      xmlhttp.send();
    }
  }
  </script>
</head>
<body>
<!-- Trigger/Open The Modal -->
<div id="container" style="width: 1100px ; height:700px; background-color: F7F0F0" >
  <div id="first" class="internos" style="float: left; width: 800px ; height:525px; background-color: ffffff">
    <TABLE  WIDTH=775 cellpadding="100" class="hoverTable" >
      <TD WIDTH=600 bgcolor="#36752D" style="padding-left: 10px;padding-bottom:3px; font size=35; font color= FFFFFF";>
        <h5>Modulo de Empleados<h5>
      </TD>
      <TD WIDTH=100 bgcolor="#36752D" style="padding-left:15px;padding-right:15px;padding-bottom:10px;padding-top:10px">  
        <button id="myBtn" name="mod" onclick="modal1();" class="boton" value="1">Agregar</button>
      </TD>  
      <TD WIDTH=100 bgcolor="#36752D" style="padding-left:15px;padding-right:15px;padding-bottom:10px;padding-top:10px"> 
        <button id="myBtn" class="boton">Eliminar</button>  
      </TD>
    </TABLE>
    <div class="datagrid" style="width: 775px ; height:350px; background-color: F7F0F8">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Empleado</th>
            <th>Departamento</th>
            <th>Puesto Trabajo</th>
            <th>Opciones</th>
          </tr>
        </thead>
        <tbody>
        <?php
          error_reporting(E_ALL);
          ini_set('display_errors', '1');
          $empleado = DAOFactory::getTblEmpleadoDAO()->queryAllOrderBy("apellido");
          for ($i=0; $i < count($empleado); $i++) { 
            $row = $empleado[$i];
            echo '<tr>';
            echo '<td>'.$row->idEmpleado.'</td>';
            echo '<td>'.$row->apellido.', '.$row->nombre.'</td>';
            $puesto = DAOFactory::getTblPuestoTrabajoDAO()->load($row->idPuestoTrabajo);
            $departamento = DAOFactory::getTblDepartamentoDAO()->load($puesto->idDepartamento);
            echo '<td>'.$departamento->nombre.'</td>';
            echo '<td>'.$puesto->nombre.'</td>';
            echo '<td><a href="form_detalleEmpleado.php?id='.$row->idEmpleado.'">Detalles</a></td>';
            echo '</tr>';
          }
        ?>
        </tbody>
      </table>
    </div>
  </div>
  <div id="second" class="internos" style="float: left; width: 200px ; height:300px; background-color: ffffff">
    <h3 class="etiquetas">Menu de Empleados</h3>
    <ul id="listamenu">
     <!-- <li><button id="myBtn" name="mod" onclick="modal2();" class="boton" value="2">Agregar</button></li> -->
      <li><a href="#" onclick="modal2();" >Agregar Capacitacion</a></li>
      <li><a href="#" onclick="modal4();">Agregar bonus</a></li>
      <li><a href="#" onclick="modal3();">Agregar Descuento</a></li>
      <li><a href="#">Agregar Permiso</a></li>
      <li><a href="#" onclick="modal5();">Agregar Falta</a></li>
    </ul>
  </div>
<!-- The Modal -->
  <div id="myModal" class="modal" data-myValue="1">
    <div id="container">
      <span class="close" onclick="closeModal();">X</span>
      <h2>Agregar Empleado</h2> 
      <!--Pestaña 1 activa por defecto-->
      <input id="tab-1" type="radio" name="tab-group" checked="checked" />
      <label for="tab-1">Datos Generales</label>
      <!--Pestaña 2 inactiva por defecto-->
      <input id="tab-2" type="radio" name="tab-group" />
      <label for="tab-2">Educacion</label>
      <!--Pestaña 3 inactiva por defecto-->
      <input id="tab-3" type="radio" name="tab-group" />
      <label for="tab-3">Puesto de Trabajo</label>
      <!--Contenido a mostrar/ocultar-->
      <div id="content">
      <!--Contenido de la Pestaña 1-->
        <div id="content-1">
          <form method="post" action="../controlador/agregarEmpleado.php" class="formularios">
            <ul>
              <li><label for="nombre_empleado" class="labelNormal">Nombres:</label><input type="text" style="text-transform: uppercase" name="nombre_empleado"></li>  
              <li><label for="apellido_empleado" class="labelNormal">Apellidos:</label><input type="text" style="text-transform: uppercase" name="apellido_empleado"></li>
              <li><label for="sexo_empleado" class="labelNormal">Sexo:</label><input type="radio" name="sexo_empleado" value="M">M
               <input type="radio" name="sexo_empleado" value="F" checked>F</li>
              <li><label for="dui_empleado" class="labelNormal">DUI:</label><input type="text" name="dui_empleado"></li>
              <li><label for="nit_empleado" class="labelNormal">NIT:</label><input type="text" name="nit_empleado"></li>
              <li><label for="isss_empleado" class="labelNormal">ISSS:</label><input type="text" name="isss_empleado"></li>
              <li><label for="afp_empleado" class="labelNormal">AFP:</label><input type="text" name="afp_empleado"></li>
              <li><label for="cuenta_empleado" class="labelNormal">Numero de Cuenta:</label><input type="text" name="numerocuenta_empleado"></li>
              <li><label for="nacimiento_empleado" class="labelNormal">Fecha de Nacimiento:</label>
              <select name="dia">
                <?php 
                  for ($i=1; $i < 32; $i++) { 
                    echo '<option value="'.$i.'">'.$i.'</option>';
                    } 
                ?>
              </select>
              <select name="mes">
              <?php 
                $meses = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
                for ($j=0; $j < 12; $j++) {
                  echo '<option value="'.($j+1).'">'.$meses[$j].'</option>';
                } page
              ?>
              </select>
              <select name="anio"><?php for ($k=date("Y"); $k > 1900; $k--) { echo '<option value="'.$k.'">'.$k.'</option>';} ?></select></li>
            </ul>
          </form>
        </div>
        <!--Contenido de la Pestaña 2--> 
        <div id="content-2">
          <form method="post" action="../controlador/agregarEducacion.php" class="formularios">
<table  border="0" style="margin: 0 auto;" id="page2">
<tr>
<td><label class="labelNormal">Titulo:</label></td>
<td><input type="text" name="titulo_educacion"></td>
</tr>
<tr>
<td><label class="labelNormal">Fecha de inicio:</label></td>
<td><input id="datepicker" type="text" name="fecha_inicio_educacion"></td>
</tr>
<tr>
<td><label class="labelNormal">Fecha de Finalizacion:</label></td>
<td><input  id="datepicker_2" type="text" name="fecha_fin_educacion"></td>
</tr>
</table>
</form> 
</div>


   <!--Contenido de la Pestaña 3-->
   <div id="content-3" style="text-align:center;">
   <form class="contact_form" action="" method="post" name="contact_form">
          <table  border="0" style="margin: 0 auto;" id="page">
<tr>
<td><label class="labelNormal">Departamento:</label></td>
<td><select name="departamento_empleado" onchange="mostrarPuestos(this.value)">
  <?php
    $departamento = DAOFactory::getTblDepartamentoDAO()->queryAll();
    for ($i=0; $i < count($departamento); $i++) { 
      $row = $departamento[$i];
      echo '<option value="'.$row->idDepartamento.'">'.$row->nombre.'</option>';
    }
  ?>
</select></td>
</tr>
<tr>
<td><label class="labelNormal">Puesto Trabajo:</label></td>
<td><select name="puesto_empleado" id="txtHint"></select></td>
</tr>

</table>
    </form>
   </div>
   
  </div>
  <button class="submit" type="submit" value="enviar">Guardar</button>
 </div>

</div>

<div id="myModal2" class="modal">
  <div id="content2">
    <span class="close" onclick="closeModal">x</span>
<form method="post" action="../controlador/agregarCapacitacion.php" class="formularios">
 <h2>Nuevo Capacitacion</h2>
  <table id="ventanaPermiso" border="0" >
       
       <tr>
       
          <td> <label for="empleado_capacitacion" class ="labelNormal">Empleado:</label></td>
          <td><select name="empleado_capacitacion">
         <?php
            $empleados = DAOFactory::getTblEmpleadoDAO()->queryAll();
            for ($i=0; $i < count($empleados); $i++) { 
                $fila = $empleados[$i];
                echo '<option value="'.$fila->idEmpleado.'">'.$fila->apellido.', '.$fila->nombre.'</option>';
            }
         ?>
         </select></td>
    
       </tr>

       <tr>
    
        <td><label for="nombre_capacitacion" class ="labelNormal">Nombre Capacitacion:</label></td>
        <td><input type="text"  name="nombre_capacitacion" />

      </tr>

      <tr>
         <td> <label for="lugar_capacitacion" class ="labelNormal">Lugar:</label></td>
         <td><input type="text"  name="lugar_capacitacion" />

      </tr>

    <tr>
       <td><label for="fechainicio_capacitacion" class ="labelNormal">Fecha de inicio:</label> </td>
       <td><input id="datepicker" type="text"  name="fechainicio_capacitacion" />

    </tr>

     <tr>
         <td><label for="fechafin_capacitacion" class ="labelNormal">Fecha de Finalizacion:</label></td>
         <td><input  id="datepicker_2" type="text"  name="fechafin_capacitacion" />
    </tr>

    <tr>
       <td><label for="descripcion_capacitacion" class ="labelNormal">Descripcion:</label></td>
       <td><textarea name="descripcion_capacitacion" cols="40" rows="6"></textarea>     </td>
    
    </tr>

   </table>
</form>
</div>
</div>

<div id="myModal3" class="modal">
<div id="content3">
<span class="close" onclick="closeModal">x</span>
<form method="post" action="../controlador/agregarDescuento.php" class="formularios">
<h2>Crear Descuento</h2>
<table id="ventanaDescuento" border="0">
  <tr>
  <td><label for="nombre_descuento" class ="labelNormal">Nombre:</label></td>
  <td><input type="text" name="nombre_descuento" /></td>
  </tr>
  <tr>
  <td><label for="monto_descuento" class ="labelNormal">Monto:</label></td>
  <td><input type="number" max="500" name="monto_descuento" id="monto_descuento" onkeydown="deshabilitarPorcentaje();"/></td>
  </tr>
  <tr>
  <td><label for="porcentaje_descuento" class ="labelNormal">Porcentaje:</label>
<td><input type="number" min="0" max="100" name="porcentaje_descuento" id="porcentaje_descuento" onkeydown="deshabilitarMonto();"/>%
</tr>  
</table> 
<button class="submit" type="submit" value="enviar">Guardar</button>

</form>
</div>
</div>

<div id="myModal4" class="modal">
<div id="content4">
<span class="close" onclick="closeModal">x</span>
<form method="post" action="../controlador/agregarBono.php" class="formularios">
<h2>Agregar Bono</h2>
<table id="ventanaBono" border="0">
    <tr>     
    <td><label for="nombre_bono" class ="labelNormal">Nombre:</label></td>
    <td><input type="text" name="nombre_bono"/></td>
    </tr>
    <tr>
    <td><label for="monto_bono" class ="labelNormal">Monto:</label></td>
    <td><input type="number" max="500" name="monto_bono" id="monto_bono" onkeydown="deshabilitarPorcentaje();"/></td>
    </tr>
    <td><label for="porcentaje_bono" class ="labelNormal">Porcentaje:</label></td>
  <td><input type="number" min="0" max="100" name="porcentaje_bono" id="porcentaje_bono" onkeydown="deshabilitarMonto();"/>%</td>
    </tr>
    <tr>
    <td><label for="puesto_puestoTrabajo" class ="labelNormal">Puesto:</label></td>
    <td><select name="puesto_puestoTrabajo">
        <?php
            $puestos = DAOFactory::getTblPuestoTrabajoDAO()->queryAll();
            for ($i=0; $i < count($puestos); $i++) { 
                $fila = $puestos[$i];
                echo '<option value='.$fila->idPuestoTrabajo.'>'.$fila->nombre.'</option>';
            }
        ?>
         </select></td>
       </tr>
       </table>
         <button class="submit" type="submit" value="enviar">Guardar</button>

</form>
</div>
</div>

<div id="myModal5" class="modal">
<div id="content5">
<span class="close" onclick="closeModal">x</span>
<form method="post" action="../controlador/agregarSancion.php" class="formularios">
 <h2>Sancion Empleados</h2>
 <table id="ventanaSancion" border="0">
  <tr>
  <td><label for="empleado_sancion" class ="labelNormal">Empleado:</label></td>
  <td><select name="empleado_sancion">
         <?php
            $empleados = DAOFactory::getTblEmpleadoDAO()->queryAll();
            for ($i=0; $i < count($empleados); $i++) { 
                $fila = $empleados[$i];
                echo '<option value="'.$fila->idEmpleado.'">'.$fila->apellido.', '.$fila->nombre.'</option>';
            }
         ?>
         </select></td>
    </tr>
    <tr>
     <td><label for="gravedad_sancion" class ="labelNormal">Gravedad:</label></td>
      <td><input type="number" step="any" max="10" name="gravedad_sancion" /></td>
    </tr>
     <tr>
      <td><label for="fecha_sancion" class ="labelNormal">Fecha de la Sancion:</label></td>
       <td><input id="datepicker" type="text" name="fecha_sancion" /></td>
    </tr>
    <tr>
     <td><label for="descripcion_capacitacion" class ="labelNormal">Descripcion:</label></td>
     <td><textarea name="descripcion_sancion" cols="40" rows="6"></textarea></td>
    </tr>
    </table>
    <button class="submit" type="submit" value="enviar">Guardar</button>
    </form>

</div>
</div>
<script>


function modal1() {
  var modal = document.getElementById('myModal');
   modal.style.display = "block";
   window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
  }
  var span = document.getElementsByClassName("close")[0];

  span.onclick = function() {
    modal.style.display = "none";
  }
}

function modal2() {
  var modal = document.getElementById('myModal2');
  modal.style.display = "block";
  window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
  }
  var span = document.getElementsByClassName("close")[1];

  span.onclick = function() {
    modal.style.display = "none";
}

}

function modal3() {
  var modal = document.getElementById('myModal3');
  modal.style.display = "block";
  window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
  }
  var span = document.getElementsByClassName("close")[2];

  span.onclick = function() {
    modal.style.display = "none";
}

}

function modal4() {
  var modal = document.getElementById('myModal4');
  modal.style.display = "block";
  window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
  }
  var span = document.getElementsByClassName("close")[3];

  span.onclick = function() {
    modal.style.display = "none";
}

}

function modal5() {
  var modal = document.getElementById('myModal5');
  modal.style.display = "block";
  window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
  }
  var span = document.getElementsByClassName("close")[4];

  span.onclick = function() {
    modal.style.display = "none";
}

}

function deshabilitarPorcentaje(){
    var1 = document.getElementById("monto_descuento").value;
    if(var1!=''){
        document.getElementById("porcentaje_descuento").disabled = true;
    }else{
        document.getElementById("porcentaje_descuento").disabled = false;
    }
}
function deshabilitarMonto(){
    var2 = document.getElementById("porcentaje_descuento").value;
    if(var2!=''){
        document.getElementById("monto_descuento").disabled = true;
    }else{
        document.getElementById("monto_descuento").disabled = false;
    }
}

</script>

</body>
</html>
