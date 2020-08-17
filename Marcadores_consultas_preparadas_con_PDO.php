<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PDO: marcadores con consultas preparadas</title>
<link href="estilos/style.css" rel="stylesheet" type="text/css">
</head>
<b>PDO: marcadores con consultas preparadas</b>
<br>
<br>
<style>
b {color:red;
	font-size: 40px;
}
form {
	border: 1px solid black;
	background-color:#FFC;
	border:10px solid black;
	margin:auto;
	padding:25px 20px;
	display:inline-block;

}
</style>
<form accion="PDO_con_PHP.php" method="get">
		<table><tr><td>Nombre del artículo: <input type="text" name="n_art"><br><br>
		Precio: <input type="text" name="pre"></tr></td></table><br><br>
		<input type="submit" name="entrar" value="Ingresar consulta">
	</form>
<?php

ini_set("display_errors","on");

	@$bus_art= $_GET["n_art"];
	@$bus_pre= $_GET["pre"];

try{
	$base=new PDO ("mysql:host=localhost; dbname=prueba", "root", "");
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	$base->exec("SET CHARACTER SET utf8");

	$sql="SELECT Descripcion, Precio, Moneda, Codigo FROM hoja1 WHERE Descripcion =:ART AND Precio = :PRE";

	//echo "Conexión exitosa" . "<br><br><br>";

	$res=$base-> prepare($sql);
	$res->execute(array(":ART"=>$bus_art, ":PRE"=>$bus_pre));

	while ($registro = $res->fetch(PDO::FETCH_ASSOC)) {
		echo "<br>" . "Nombre articulo: " . $registro['Descripcion'] . "<br>" . "Precio: " . $registro['Precio'] . "<br>" . "Moneda: " . $registro['Moneda'] . "<br>" . "Codigo: " . $registro['Codigo'] . "<br>";
	}
		$res->closeCursor();

}catch (Exeption $e) {
	die("Error: " . $e ->GetMessage());
	//echo "Código del error: " . $e->getCode();
	//echo "Error en la linea:  " . $e->getLine();
}finally{
		$base=null;
	}

?>
<?php




?>
<body>
</body>
</html>