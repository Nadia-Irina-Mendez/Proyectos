<?php
$ultimo_dd="otroconrwnido para elultimo elemento";
$i=0;
$nombres = array(
	"Pepe",
	"Pipo",
	"Papo",
	"Pipi",
	"Pope",
);
foreach($nombres as $nombre){

?>
<!DOCTYPE html>

<head>

<title>Nady´s page</title>
<meta charset="UTF-8">
<title>Modificar estilos de elementos</title>
	<style>
		.thumb {
			width: 200px;
			transition: 300ms all ease;
		}

		.grande {
			width: 400px;

		}

		.titulo {
			border: 1px solid navy;
			background:#ccc;
			padding: 10px; 

		}

		.tituloGrande {
			font-size: 60px;

		}
	</style>
</head>
<body>
<?php
echo('<h1 id="encabezado" class="titulo tituloGrande">Hola '.$nombre.'</h1>');
?>

<form action="">
	<input type="button" value="cambio de tamaño" onclick="zoom();">
	</form>

	<img id="thumb" src="http://lorempixel.com/400/400/" width=400 class ="thumb">

<script>
	var encabezado = document.getElementById("encabezado");
	encabezado.style.color = "#fff";
	encabezado.style.color = "navy";
	//encabezado.className = encabezado.className.replace("tituloGrande", "");
</script>
<script>
 var zoom = function(){
 var thumb = document.getElementById("thumb");
 //thumb.setAttribute("class", "thumbGrande");
 //thumb.className="thumbGrande";
 //Ambos cumplen la misma funcion
 if (thumb.className == "thumb") {
 	thumb.className="thumbGrande";
} else {thumb.className = "thumb"}
}
</script>>
<a href="ftp://descarga.html" target="_blank">FTP download</a>>
<dl>
  <dt>Descripción:</dt>
  <dd>Somos una pagina web de humor</dd>
  <dt>Chat</dt>
  <dd>Prohibido difundir información personal</dd>
  <dt>Subir contenido</dt>
<?php
  echo('<dd>'.$ultimo_dd.'</dd>');
?>

</dl>
<?php
$i++;
}
?>
<?php

$foo=7;
do{
//while ($foo<6) {
	echo "Estamos ejecutando codigo de bucle <br>";

	$foo++;
}while ($foo<6); {

}
echo "salimos del bucle";
//la diferencia entre while y do while es que do while se ejecuta al menos una vez aunque la condicion sea falsa
?>
<br>
<?php

for ($i=0; $i<=10; $i++) { 
	echo "Galletita";
 if ($i==6) {
	echo "bucle interrumpido";
	break;
	
}
}


for ($tabla_del_nueve=0; $tabla_del_nueve <=10 ; $tabla_del_nueve++) { 
	if ($tabla_del_nueve==0) {
		echo "Todo numero multiplicado por 0 da 0";
		continue;
	}
	echo "9 X $tabla_del_nueve = " . 9*$tabla_del_nueve . "<br>";
} echo "Tabla del 9";

?>
<?php

$texto="NADIA";
echo (strtolower($texto));

$texto_0="nadia";
echo (strtoupper($texto_0));

function suma ($numero_1, $numero_2){
$resultado = $numero_1+$numero_2;
return $resultado;
}
//suma(5,7); 
echo (suma(5,7));

function frase_mayuscula($frase,$conversion=true){

	$frase=strtolower($frase);
	if ($conversion==true) {
		$resultado=ucwords($frase);
	}else{
		$resultado=strtoupper($frase);
	}return $resultado;
} echo (frase_mayuscula ("esto es una prueba"));

?>
<?php

function incrementar(&$valor_1){
	$valor_1++;
	return $valor_1;
}
$numero_0=5;
echo incrementar($numero_0) . "<br>";
echo $numero_0;

function cambiar_mayus(&$param){
	$param=strtolower($param);
	$param=ucwords($param);
	return $param;
}
$cadena="hola Mundo";
echo cambiar_mayus($cadena) . "<br>";
echo $cadena;
?>

</body>
</html>