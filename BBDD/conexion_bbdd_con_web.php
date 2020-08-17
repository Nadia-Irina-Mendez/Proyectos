<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Conectar BBDD a la web</title>

<style>
	
	table {
		border-color: blue;
		border: 1px dotted blue;
		background: violet;
		font-family: bold 40px;
		width: 50%;
		margin: auto;
		color: white;
		display: block;

	}

</style>
</head>

<body>
<?php

$db_host="localhost";
$db_nombre="prueba";
$db_usuario="root";
$db_contrasenia="";

$conexion=mysqli_connect($db_host, $db_usuario, $db_contrasenia, $db_nombre);
if (mysqli_connect_errno()) {
	echo"fallo al conectar con base de datos" . "<br>";
	exit();
}else{
	echo "Conexión con base de datos exitosa" . "<br>";
}

mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");
mysqli_set_charset ($conexion, "utf8");
$consulta="SELECT * FROM hoja1 ";
$resultados=mysqli_query($conexion, $consulta);

$registros=1;
echo "<table border=1><tr><td>nombre</td><td>precio</td><td>moneda</td><td>codigo</td></tr>";
while ($fila=mysqli_fetch_array($resultados, MYSQLI_BOTH)) {
	
echo "<tr>";	
echo "<td>" . $fila["Descripción"] . "</td>";
echo "<td>" . $fila["Precio"] . "</td>";
echo "<td>" . $fila["Moneda"] . "</td>";
echo "<td>" . $fila["Código"] . "</td>";
echo "</tr>";

$registros++;
}

mysqli_close($conexion);
?>
</table>
</body>
</html>