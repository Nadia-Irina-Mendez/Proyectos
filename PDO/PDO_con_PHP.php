<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PDO_con_PHP</title>
</head>
<b>PDO</b>
<br>
<br>
<br>
<br>
<body>
	<form accion="PDO_con_PHP.php" method="get">
		<label>Buscar: <input type="text" name="buscar"></label>
		<input type="submit" name="enviar" value="Ingresar consulta">
	</form>
<?php

	@$busqueda= $_GET["buscar"];

try{
	$base=new PDO ("mysql:host=localhost; dbname=prueba", "root", "");
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$base->exec("SET CHARACTER SET utf8");

	$sql="SELECT * FROM hoja1 WHERE Descripcion like '%' ? '%'";

	echo "Conexión exitosa" . "<br><br><br>";

	$res=$base-> prepare($sql);
	@$res->execute(array($busqueda));
	while ($registro = $res->fetch(PDO::FETCH_ASSOC)) {
		echo "<br>" . "Nombre articulo: " . $registro['Descripcion'] . "<br>" . "Precio: " . $registro['Precio'] . "<br>" . "Moneda: " . $registro['Moneda'] . "<br>" . "Codigo: " . $registro['Codigo'] . "<br>";
	}
		$res->closeCursor();

}catch (Exeption $e) {
	die("Error: " . $e ->GetMessage());
	
}finally{
		$base=null;
	}

?>
<?php




?>
</body>
</html>