<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hola mundo</title>
</head>
<body>
	<h1>Hola mundo</h1> 

	<style>
.texto{
	font-weight: bold;
	color: blue;
	font-size:50px;
}
</style>
<?php

echo "<p class='texto'>Hello</p>";

?> 

</body>
</html>

<h1><?php

echo "Regikstrate";
?></h1>

<!--http://localhost-->
<form method="get" action="#">
	nombre <input name="nombre" /><br/>
	apellido <input name="apellido" /><br/>
	<input type="submit" name="enviar" />
</form>
<?php

if (isset($_POST["enviar"])) {
	
	$nombre=$_POST[nombre_usuario];
	$apellido=$_POST[apellido_usuario];
if ($nombre=="Nadia Irina" && $apellido=="Mendez Domeneche") {
	echo "Hola";
}else{
	echo "No puedes entrar";
}
};
?>

<!--strings = cadena de texto-->
<!--integer : numeros enteros-->
<!--double: numeros decimales-->
<!--bolenao: true o false-->
<?php

$nombre = "Nadia";
$numero = "7";
$numero_decimal = "0.5";
$verdadero = false;
echo $numero;
echo $nombre;
echo $numero_decimal;

echo "Hola, $nombre";

echo gettype($nombre);

//global $nombre
?>
<!--array: arreglo-->
<!--object: objeto-->
<!--class: clase-->
<!--nul: cuando a una variable no se le ha asignado ningun valor-->
<?php

define("PI", 3.14, true);
echo "<el valor de pi es:" . PI;

define("NOMBRE", "Nadia");
echo NOMBRE;
?>
<!--CONSTANTES: TIPO DE VARIABLES EN MAYUSCULAS QUE NO SE PUEDEN SOBREESCRIBIR-->
<?php

include ("inicio_de.php");
//incluye archivos externos
require ("inicio_de.php");
//incluye archivos externos

?>

<?php

function incrementarVariable(){

	$contador=0;
	$contador++;

	echo $contador . "<br>";
}

incrementarVariable();

//1=true 0=false
?>
<?php

$v1="objeto";
$v2="OBJETO";

$res=strcmp($v1, $v2); //devuelve 1 si es true y 0 si es false respeta mayusculas y minusculas
echo "El resultado es" . $res;
if (!$res) {
	echo"Son iguales";
}else{
	echo"No son iguales";
}
?>
<br />
<?
$res=strcasecmp($v1, $v2); //devuelve 1 si es true y 0 si es false no respeta mayusculas y minusculas

echo "El resultado es" . $res;
if ($res) {
	echo"No son iguales";
}else{
	echo"Son iguales";
}

?>
<?php

$variable1= 8;
$variable2= "8";
$variable3= "Juan";

if ($variable1==$variable2) {
	echo "son iguales";
}else{
echo "no son iguales";
}

?>
<?php

$numerito = false;
if (empty($numerito)) {
	echo "La variable esta vacia";
}else{
	echo "La variable contiene un valor";
}

$numero_entero = 0;

if (isset($numerito)) {
	echo "La variable existe o es true(1)";
}else{
	echo "La variable no existe o es false(0)";
}

?>

<!--

== igual que
=== identico que
!= no es igual
< menor que
> mayor que
<= menor o igual que
>= mayor o igual que

-->


