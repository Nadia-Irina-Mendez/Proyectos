<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cookies</title>
</head>
<body>
	<h1>Cookies: </h1>

<?php
if (isset($_COOKIE["prueba"])) {
	setcookie("prueba", "Esta es la data de la primera cookie", time()+3000000, "http://localhost/php/Cookies/Read_cookie.php");
// setcookie ("nombre de cookie", "valor de cookie", duracion en segundos de la cookie, url del archivo en el que la cookie se ejecutaria);
}else{
	setcookie("prueba", "Esta es la data de la primera cookie", time()-1, "http://localhost/php/Cookies/Read_cookie.php");
}
// para destruir una cookie se pone el tiempo negativo;
?>



</body>
</html>