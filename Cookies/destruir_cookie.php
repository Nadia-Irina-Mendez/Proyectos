<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Destruir Cookies</title>
</head>
<body>
	<?php

setCookie("idioma_seleccionado", "es", time()-1);

echo "Cookie destruida";

	?>
</body>
</html>