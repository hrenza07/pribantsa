<?
include("../generated/include_dao");

$db = new Connection();
$username = $_POST['username'];
$password = $_POST['password'];
$db->Connection();
$query= new TblUsuarioMySqlDAO();
$query->load($username);
$db->executeQuery($query); 
$existe = mysql_num_rows($db)
		
	if($exite != 0)
  { 	

  	  $pass = $db[0]['contrasena']
  		
  		if($password==$pass ){
     		  session_start(); 
     }
  }
	

>