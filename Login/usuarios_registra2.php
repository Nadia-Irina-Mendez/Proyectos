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

<table border=2 red>
  <tr>
    <td>Menu</td>
  </tr>
  <tr>
    <td><a href="inicio.html">Inicio</a></td>
    <td><a href="index.html">Contacto</a></td>
    <td><a href="usuarios_registrados.php">Publicaciones</a></td>
    <td><a href="www.google.com">Referencias</a></td>
  </tr>
<a href="usuarios _registrados.php">Volver</a>
<br><br>
<a href="cierre_sesion.php">Cerrar sesión</a>

</table>
</body>
</html>