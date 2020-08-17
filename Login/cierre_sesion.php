<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cierre de sesión</title>
</head>
<body>
	<?php
		session_start();
		session_destroy();
		header("location:login_1.php");


	?>
</body>
</html>