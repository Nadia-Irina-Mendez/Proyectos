<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login con HASH</title>
</head>
<body>
	<form action="" method="post">
        <table><tr>
          <td>
            Usuario:</td><td><input type="text" name="login" id="login"></td></tr>
           <tr>
             <td> Contraseña: </td><td><input type="password" name="password" id="contra"></td></tr>
           
           <tr><td colspan="2"> <input type="submit" name="enviando" value="Enviar">
        </td></tr></table>
        </form>
    
<?php
try{
	$login=htmlentities(addslashes($_POST["login"]));
	$password=htmlentities(addslashes($_POST["password"]));
	$contador=0;
	$base=new PDO("mysql:host=localhost; dbname=prueba", "root", "");
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="SELECT * FROM usuarios WHERE usuario=:login";
	$resultado=$base->prepare($sql);
	$resultado->execute(array(":login"=>$login));
	while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
		
		if (password_verify($password, $registro["password"])) {
			$contador++;
		}
	}

	if ($contador>0) {
		echo "Usuario registrado";
	}else{
		echo "Usuario no registrado";
	}



	$resultado->closeCursor();
}catch(Exception $e){			
		
		
		echo "Línea del error: " . $e->getLine();
		
	}finally{
		
		$base=null;
		
		
	}


?>
</body>
</html>