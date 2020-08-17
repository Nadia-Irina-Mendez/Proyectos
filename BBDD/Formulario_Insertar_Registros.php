<!doctype html>
<html>
    
    <head>
    
        <meta charset="utf-8">
        <title>Formulario insertar registros</title>
        <style>
			table{
				background-color:#FFC;
				border:10px solid black;
				margin:auto;
				padding:25px;
			}
		h1{
			width:50%;
			margin:25px auto;
			
			text-align:center;
			margin-bottom:50px;
		}
		
		body{
			background-color: white;
		}
		
		#boton{
			padding-top:25px;
			
		}
		
		</style>
    </head>
    
    <body>
    <h1>Alta de artículos nuevos</h1>
    
        <form action="resultados_insertar_registros.php" method="get">
        <table>
        <tr><td>
            <label>Descripcion:</label></td><td> <input type="text" name="d_art"></td></tr>
            <tr><td><label>Precio:</label></td><td><input type="text" name="pre"></td></tr>
          <tr><td>  <label>Moneda:</label> </td><td><input type="text" name="moneda"></td></tr>
          <tr><td>  <label>Código: </label></td><td><input type="text" name="cod"></td></tr>
          
          <tr><td colspan="2" align="center" id="boton">  <input type="submit" name="enviando" value="Enviar"></td></tr>
        </table>
        </form>
    
    </body>
    
</html>