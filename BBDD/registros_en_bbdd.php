<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registros en BBDD</title>
</head>
<b>Insertar registros en BBDD</b>
<body>
<br>
<br>
<br>
<?php

$db_host="localhost";
$db_nombre="prueba";
$db_usuario="root";
$db_contraseña="";

$conexion=mysqli_connect($db_host, $db_usuario, $db_contraseña, $db_nombre);
if (mysqli_connect_errno()) {
	echo"fallo al conectar con base de datos" . "<br>";
	exit();
}else{
	echo "Conexión con base de datos exitosa" . "<br>";
}
mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");
mysqli_set_charset ($conexion, "utf8");
$consulta="INSERT INTO hoja1 (DESCRIPCIÓN, PRECIO, MONEDA,CÓDIGO) VALUES ('AURICULAR KINGSTON GAMER',
'53,23',
'USD',
'HX-HSCS-BK/LA')";
$resultados=mysqli_query($conexion, $consulta);
mysqli_close($conexion);
?>
<b>Insertar registros 2 </b>
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



$conexion=mysqli_connect($db_host, $db_usuario, $db_contraseña, $db_nombre);
if (mysqli_connect_errno()) {
	echo"fallo al conectar con base de datos" . "<br>";
	exit();
}else{
	echo "Conexión con base de datos exitosa" . "<br>";
}
mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");
mysqli_set_charset ($conexion, "utf8");

$consulta="INSERT INTO productos3 (CODIGOARTICULO, SECCION, NOMBREARTICULO, precio, fecha, importado, pais) VALUES ('$cod','$sec','$nom','$pre','$fech','$imp','$pais')";

$resultados=mysqli_query($conexion, $consulta);

if ($resultados==false) {
	echo "No se pudo cargar el artículo";
}else{
	echo "El artículo ha sido agregado con éxito" . "<br>" . "<br>";
	echo "<table> <tr><td>$cod</td></tr>";
	echo "<table> <tr><td>$sec</td></tr>";
	echo "<table> <tr><td>$nom</td></tr>";
	echo "<table> <tr><td>$pre</td></tr>";
	echo "<table> <tr><td>$fech</td></tr>";
	echo "<table> <tr><td>$imp</td></tr>";
	echo "<table> <tr><td>$pais</td></tr></table>";

}

mysqli_close($conexion);


?>

</body>
</html>