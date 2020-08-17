<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php

if (isset($_POST["enviando"])) {
	
	$contra=$_POST["contra"];

	$nombre=$_POST["nombre_usuario"];
	//$edad=$_POST["edad_usuario"];

	//if ($edad <18) {
		//echo "eres menor de edad, no tienes acceso";
	//}else if ($edad<=40) {
		//echo "Eres joven";
	//}else if ($edad <=65) {
		//echo "eres maduro"; 
	//}else{
		//echo "eres mayor de edad, bienvenido";
	//}
	$resultado= $nombre=="Nadia" && $contra== "17qsyav19" ? "Hola Nadia":"no puedes acceder pu40";
	echo $resultado;
};	
	//echo $edad<18 ? "eres menor de edad" : "no eres menor de edad";

//Otra manera de operador ternario seria:

//$res = ($A == $B) ? "A es igual a B" : "A no es igual a B";

?>
<?php

if (isset($_POST["enviando"])) {
	
	$contra=$_POST["contra"];
	$nombre=$_POST["nombre_usuario"];

	switch ($nombre) {
		case "Nadia":
			echo "Hola Nadia";
			break;
		case "Maria":
			echo "Hola Maria";
			break;
		case "Samuel":
			echo "Hola Samuel";
			break;
		
		default:
			echo "Usuario invalido";
			
	}}


?>