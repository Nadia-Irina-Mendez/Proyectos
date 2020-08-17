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
   <form method="get">
        <table>
        <tr><td>
            <label>Descripcion:</label></td><td> <input type="text" name="d_art"></td></tr>
            <tr><td><label>Precio:</label></td><td><input type="text" name="pre"></td></tr>
          <tr><td>  <label>Moneda:</label> </td><td><input type="text" name="moneda"></td></tr>
          <tr><td>  <label>Código: </label></td><td><input type="text" name="cod"></td></tr>
          
          <tr><td colspan="2" align="center">  <input type="submit" name="ingresar" value="Ingresar" id="ingresar">
 
        </table>
        </form>
<?php

ini_set("display_errors","on");

	@$bus_art= $_POST["n_art"];
	@$bus_pre= $_POST["pre"];
	@$bus_mon= $_POST["mon"];
	@$bus_cod= $_POST["cod"];


try{
	$base=new PDO ("mysql:host=localhost; dbname=prueba", "root", "");
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$base->exec("SET CHARACTER SET utf8");

	$sql="INSERT INTO hoja1 (Descripcion, Precio, Moneda, Codigo) VALUES (:n_art, :pre, :mon, :cod)";
	$sq="DELETE FROM hoja1 WHERE Descripcion =:n_art";


	$res=$base-> prepare($sql);
	$res->execute(array(":n_art"=>$bus_art, ":pre"=>$bus_pre, ":mon"=>$bus_mon, ":cod"=>$bus_cod));

//echo "Registro insertado con éxito";

	
		$res->closeCursor();

}catch (Exeption $e) {
	die("Error: " . $e ->GetMessage());
	//echo "Código del error: " . $e->getCode();
	//echo "Error en la linea:  " . $e->getLine();
}finally{
		$base=null;
	}

//---------------------------------------------------------------------------------------------------------------------------------------//

?>
<br><br><br><br><br><br>
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
   <form method="get">
        <table>
        <tr><td>
            <label>Descripcion:</label></td><td> <input type="text" name="n_art"></td></tr>
           </td></tr>

          <tr><td colspan="2" align="center">  <input type="submit" name="Eliminar" value="Eliminar" id="eliminar">
 
        </table>
        </form>
 <?php

	ini_set("display_errors","on");

	@$busq_art= $_POST["n_art"];


try{
	$base=new PDO ("mysql:host=localhost; dbname=prueba", "root", "");
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$base->exec("SET CHARACTER SET utf8");

	$sql="DELETE FROM hoja1 WHERE Descripcion =:n_art";

	$resultado=$base->prepare($sql);
	$resultado->execute(array(":n_art"=>$busq_art));

//echo "Registro eliminado";

	
		$resultado->closeCursor();

}catch (Exeption $e) {
	die("Error: " . $e ->GetMessage());
	//echo "Código del error: " . $e->getCode();
	//echo "Error en la linea:  " . $e->getLine();
}finally{
		$bases=null;
	}

?>

<body>
</body>
</html>