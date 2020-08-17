<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Set lenguaje</title>
</head>
<body>
	<?php

if(isset($_COOKIE["idioma_selecionado"])){
	if ($_COOKIE["idioma_seleccionado"]=="es") {
		header("location:spanis.php");
	}elseif ($_COOKIE["idioma_seleccionado"]=="in") {
		header("location:english.php");
	}
}



	?>
	<table width="25%" border="1" align="center">
		<tr>
			<td colspan="2" align="center">Elige el idioma/Set lenguaje</td>
		</tr>
		<tr>
			<td align="center"><a href="C:\xampp\htdocs\php\Cookies\creaCookie.php?idioma=es"><img src="spain.png" border="0" width="120" height="90"></a></td>
			<td align="center"><a href="C:\xampp\htdocs\php\Cookies\creaCookie.php?idioma=in"><img src="inglaterra.png" border="0" width="120" height="90"></a></td>
		</tr>
	</table>
</body>
</html>