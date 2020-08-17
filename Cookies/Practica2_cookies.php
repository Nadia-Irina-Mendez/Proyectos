<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Log In</title>
</head>
<h1>INTRODUCE TUS DATOS:</h1>
<br>
<br>
<body>
  <h1>Registrate: </h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post">
    <table>
    <tr><td>Usuario: <input type="text" name="usuario" method="post"></td></tr>
    <tr><td>Password: <input type="password" name="password" method="post"></tr></td>
    <tr><td><input type="checkbox" name="checkbox" value="confirmar">No soy un robot</td></tr>
    <tr><td><input type="submit" name="enviar" value="enviar"></td></tr>
</label>
  </form>

  <?php

  $autenticado=false;

  if (isset($_POST["enviar"])) {
    
  try{

  $base=new PDO ("mysql:host=localhost; db_name=prueba", "root", "");
  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql="SELECT * FROM usuarios WHERE usuario = ':login' AND password = ':password'";
  $resultado=$base->prepare($sql);
  $login=htmlentities(addslashes($_POST["login"]));
  $password=htmlentities(addslashes($_POST["password"]));
  $resultado->bindValue(":login", $login);
  $resultado->bindValue(":password", $password);
  $resultado->execute();
  $num_registro=$resultado->rowCount();

  if ($num_registro!=0) {
    $autenticado=true;

    if (isset($_POST["recordar"])) {
       setcookie("nombre_usuario", $_POST["login"], time()+86400);
     } 

  }else{
  echo "Usuario invalido";
  } 


}catch(Exception $e){
  die("Error en la linea: " . $e->getLine());

}
}

?> <?php

if ($autenticado==false) {
 if (isset($_COOKIE["nombre_usuario"])) {
   include("form.php");
 }
}

  require("destruir_cookie.php");

if (isset($_COOKIE["nombre_usuario"])) {
  echo "Hola " . $_COOKIE["nombre_usuario"];
}else if ($autenticado==true) {
  echo "Hola " . $_POST["login"];
}


?>
<?php

if ($autenticado==true || isset($_COOKIE["nombre_usuario"])) {

include("usuarios_registrados.html");

}

?>




</body>
</html>