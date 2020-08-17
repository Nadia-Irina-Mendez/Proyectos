<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Log In</title>
</head>
<h1>INTRODUCE TUS DATOS:</h1>
<br>
<br>
<body>
	<?php
	if (isset($_POST["enviar"])) {
		
	

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

	//header("location:usuarios_registrados.php");
	}else{
	echo "Usuario invalido";
	}	


}catch(Exception $e){
	die("Error en la linea: " . $e->getLine());

}
}

?> <?php
if (!isset($_SESSION["usuario"])){
	 include("formulario.html");
	}else
	echo "Usuario: " . $_SESSION["usuario"];
?>
	<h2>Contactanos</h2>
	<table width="800" border="1"></table>
	<tr>
		<td><a href="C:\xampp\htdocs\php\Login\facebook.jpg"><img src="C:\xampp\htdocs\php\Login\facebook.jpg" width="50" height="50"></a></td>
		<td><a href="C:\xampp\htdocs\php\Login\gmail.png"><img src="C:\xampp\htdocs\php\Login\gmail.png" width="50" height="50"></a></td>
	</tr>
	<tr>
		<td><a href="C:\xampp\htdocs\php\Login\instagram.png"><img src="C:\xampp\htdocs\php\Login\instagram.png" width="50" height="50"></a></td>
		<td><a href="C:\xampp\htdocs\php\Login\whatsap.jpg"><img src="C:\xampp\htdocs\php\Login\whatsap.jpg" width="50" height="50"></a></td>
	</tr>
</table>
</body>
</html>