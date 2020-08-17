<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>pagina busqueda</title>
</head>
<body>
	
<?php

$busqueda=$_GET["buscar"];

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
$consulta="SELECT * FROM hoja1 WHERE Descripción like '%".$_GET["buscar"]."%' ";
$resultados=mysqli_query($conexion, $consulta);

$registros=1;

echo "<table border=1>" . "<td>";
while ($fila=mysqli_fetch_assoc($resultados)) {

echo $fila["Descripción"] . "<td>";
echo $fila["Precio"] . "<td>";
echo $fila["Moneda"] . "<td>";
echo $fila["Código"] . "<td></tr>";
echo "<td>";

$registros++;
};

//mysqli_close($conexion);
?>
</table>
</body>
</html> 