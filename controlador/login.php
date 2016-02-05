<<<<<<< HEAD
<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once('../modelo/include_dao.php');
$usuario = $_POST['usuario'];
$pass = $_POST['clave'];
$usuarios = DAOFACTORY::getTblUsuarioDAO()->queryAllUsuarioContrasena($usuario,md5($pass));
$existe = 0;
$user_name = '';
for ($i=0; $i < count($usuarios); $i++) { 
	$row = $usuarios[$i];
	$user_name = $row->nombre;
	$existe = 1;
}
if ($existe==1) {
	session_start();
	$_SESSION["autentica"]="SI";
	$_SESSION["usuario"]=$user_name;
	header("Location: ../vista/menu.php");
}else{
	header("Location: ../index.html");
}
=======
<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once('../modelo/include_dao.php');
$usuario = $_POST['usuario'];
$pass = $_POST['clave'];
$usuarios = DAOFACTORY::getTblUsuarioDAO()->queryAllUsuarioContrasena($usuario,md5($pass));
$existe = 0;
$user_name = '';
for ($i=0; $i < count($usuarios); $i++) { 
	$row = $usuarios[$i];
	$user_name = $row->nombre;
	$existe = 1;
}
if ($existe==1) {
	session_start();
	$_SESSION["autentica"]="SI";
	$_SESSION["usuario"]=$user_name;
	header("Location: ../vista/menu.php");
}else{
	header("Location: ../index.html");
}
>>>>>>> 4a70402fcc3173d1d4cfb996767c10412040f22b
?>