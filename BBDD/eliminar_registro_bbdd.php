<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registros en BBDD</title>
</head>
<b>Eliminar registros en bbdd</b>
<body>
	<style>

h1{
	text-align:center;
	color:#00F;
	border-bottom:dotted #0000FF;
	width:50%;
	margin:auto;
	
	
}

table{
	border:1px solid #F00;
	padding:20px 50px;
	margin-top:50px;
}

body{
	background-color:#FFC;
}


</style>
	  <h1>Eliminación de Artículos</h1>
<form name="form1" method="get" action="eliminar_registro_bbdd.php">
  <table border="0" align="center">
    <tr>
      <td>Código Artículo</td>
      <td><label for="c_art"></label>
      <input type="text" name="c_art" id="c_art"></td>

      <td align="center"><input type="submit" name="eliminar" id="eliminar" value="Eliminar"></td>
    </tr>
  </table>
<br>
<br>
<br>
<?php

$db_host="localhost";
$db_nombre="prueba";
$db_usuario="root";
$db_contraseña="";

$cod=$_GET["c_art"];
$sec=$_GET["seccion"];
$nom=$_GET["n_art"];
$pre=$_GET["precio"];
$fech=$_GET["fecha"];
$imp=$_GET["importado"];
$pais=$_GET["p_orig"];

if(isset($_GET["c_art"])){
$conexion=mysqli_connect($db_host, $db_usuario, $db_contraseña, $db_nombre);
if (mysqli_connect_errno()) {
	echo"fallo al conectar con base de datos" . "<br>";
	exit();
}else{
	echo "Conexión con base de datos exitosa" . "<br>";
}
mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");
mysqli_set_charset ($conexion, "utf8");

$consulta="DELETE FROM productos3 WHERE CODIGOARTICULO='$cod'";

$resultado=mysqli_query($conexion, $consulta);

if ($resultado==true) {
	echo "Registro eliminado";
}else{
	echo "No se pudo eliminar el artículo";

}

mysqli_close($conexion);
}

?>

</body>
</html>