<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Read cookie</title>
</head>
<body>
<?php

if (isset($_COOKIE["prueba"])) {

	echo $_COOKIE["prueba"];	
}else{
	echo "Cookie no encontrada";
}


?>
</body>
</html>