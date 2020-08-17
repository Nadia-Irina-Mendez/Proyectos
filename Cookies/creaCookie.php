<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Crear Cookie lenguaje</title>
</head>
<body>
	<?php

setCookie("idioma_seleccionado", $_GET["idioma"], time()+86400);
header("location:Cookies.php");

	?><?php
	if (!$_COOKIE["idioma_seleccionado"]){
		header("location:set_lenguaje_cookies.php");
	}elseif ($_COOKIE["idioma_seleccionado"]=="es") {
		header("location:spanis.php");
	}elseif ($_COOKIE["idioma_seleccionado"]=="in") {
		header("location:english.php");
	}



		?>
</body>
</html>