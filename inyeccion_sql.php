<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Inyección SQL</title>
	

</head>

<body>
<?php
ini_set("display_errors","on");

function consulta($la_busqueda){

@$la_busqueda = $_GET["buscar"];

$db_host="localhost";
$db_nombre="prueba";
$db_usuario="root";
$db_contraseña="";

$conexion=mysqli_connect($db_host, $db_usuario, $db_password);

$usuario= mysqli_real_escape_string ($conexion, $_GET["usuario"]);
$password= mysqli_real_escape_string ($conexion, $_GET["password"]);

if (mysqli_connect_errno()) {
	echo"fallo al conectar con base de datos" . "<br>";
	exit();
}else{
	echo "Conexión con base de datos exitosa" . "<br>";
}
mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");
mysqli_set_charset ($conexion, "utf8");

$consulta="DELETE * FROM usuarios WHERE usuario = '$usuario' and pasword ='$password' ";

echo "$consulta<br><br>";

$consulta="SELECT * FROM usuarios WHERE usuario = '$usuario' 'or '1'='1 and password = '$password' 'or '1'='1";

mysqli::real_escape_string($consulta);

echo "$consulta" . "<br>";

mysqli_query($conexion, $$consulta);

if (Mysqli_affected_rows($conexion)>0) {
echo "La operación se ha realizado con éxito";
}else{
echo "No se ha podido completar la operación";
}

//if (
//$resultados=mysqli_query($conexion, $consulta)) {
//echo "Datos procesados correctamente";
//}

$registros=1;

echo "<table border=1>" . "<td>";
while ($fila=mysqli_fetch_assoc($resultados)) {

echo $fila["usuario"] . "<td>";
echo $fila["password"] . "<td></tr>";
echo "<td>";

$registros++;
};

mysqli_close($conexion);
};
?>

</table>
<form action=""  method='post'>
		<label>Usuario:<input id="usuario" type='text' name='usuario'></label>
		<label>Password:<input type='password' name='password' id="password"></label>
		<input type='submit' name='login' value='login'>
		</form>

</body>

</html>
