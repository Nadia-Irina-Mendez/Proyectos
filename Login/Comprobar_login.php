<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Comprobar_login</title>
</head>
<body>
<?php

ini_set("display_errors", 1);
	try{

	$base=new PDO ("mysql:host=localhost; db_name=prueba", "root", "");
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="SELECT * FROM usuarios WHERE usuario = :login AND password = :password";
	$resultado=$base->prepare($sql);
	$login=htmlentities(addslashes($_POST["login"]));
	$password=htmlentities(addslashes($_POST["password"]));
	$resultado->bindValue(":login", $login);
	$resultado->bindValue(":password", $password);
	$resultado->execute();
	$num_registro=$resultado->rowCount();

	if ($num_registro!=0) {
	session_start();
	$_SESSION["usuario"]=$_POST["login"];
	$_SESSION["contra"]=$_POST["password"];

	header("location:usuarios_registrados.php");
	}else{
	header("location:Login_1.php");
	}	


}catch(Exception $e){
	die("Error en la linea: " . $e->getLine());

}


?>

</body>
</html>