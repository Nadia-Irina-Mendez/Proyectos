<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Consultas preparadas</title>
</head>

<body>

<?php

ini_set("display_errors","on");

@$d_art=$_GET ["d_art"];
@$pre=$_GET ["pre"];
@$moneda=$_GET ["moneda"];
@$cod=$_GET ["cod"];

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

$sql="INSERT INTO hoja1 (Descripcion, Precio, Moneda, Codigo) VALUES (?, ?, ?, ?)";

$resultado=mysqli_prepare($conexion, $sql);

$ok=mysqli_stmt_bind_param ($resultado, "ssss", $d_art, $pre, $moneda, $cod);

$ok=mysqli_stmt_execute($resultado);

if ($ok=false) {
	echo "Error al ejecutar consulta";
}else{
	echo "Consulta realizada con éxito" . "<br>";
}

//$ok=mysqli_stmt_bind_result($resultado, $descrip, $precio, $moneda, $codigo);

echo "Un nuevo artículo ha sido creado con éxito"."<br><br>";

echo $d_art . " ", $pre . " ", $moneda . " ", $cod. " " ;
//while (mysqli_stmt_fetch($resultado)) {
	//echo $descrip . " " .  $precio . " " . $moneda . " " . $codigo . "<br>" ;
//}
mysqli_stmt_close($resultado);

?>
</body>
</html>