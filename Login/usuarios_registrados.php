<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Usuarios validos</title>
</head>
<body>
	<?php
session_start();
	if (!isset($$_SESSION["usuario"])) {
		header("Location:Login_1.php");
	}
	?>
	<h1>Bienvenido al sitio</h1>
	<?php
		echo "Hola" . $_SESSION["usuario"] . "<br>";


	?>
	<br><br>
</body>
</html>