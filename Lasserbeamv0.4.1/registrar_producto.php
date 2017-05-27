<!DOCTYPE html>
<?php
session_start();
if($_SESSION['ok']=="ok")
{
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Registrar Producto</title>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" media="all">
<script type="text/javascript" src="jquery-1.4.2.min"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	
	<img id="top" src="css/top.png" alt="">
	<div class="contenedor">
	
		<h1><a class="t">Registrar Producto</a></h1>
		<form id="form_1075005" class="appnitro"  method="post" action="registrar_producto2.php">
					<div class="form_description">
			<p></p>
		</div>						
			<ul >
			
		<li id="li_1" >
		<label class="description" for="element_1">ID </label>
		<div>
			<input id="cc" name="id" class="xxx" type="text" maxlength="255" value="" required /> 
		</div> 
		</li>		
		<li id="li_2" >
		<label class="description" for="element_3">Nombre </label>
		<div>
			<input id="cargo" name="nombre" class="xxx" type="text" maxlength="255" value="" required /> 
		</div> 
		</li>		
		<li id="li_3" >
		<label class="description" for="element_4">Stock Minimo </label>
		<div>
			<input id="password" name="stockmin" class="xxx" type="text" maxlength="255" value="" required /> 
		</div> 
		</li>
		<li id="li_4" >
		<label class="description" for="element_4">Stock Maximo </label>
		<div>
			<input id="password" name="stockmax" class="xxx" type="text" maxlength="255" value="" required /> 
		</div> 
		</li>
		<li id="li_5" >
		<label class="description" for="element_4">Stock Actual </label>
		<div>
			<input id="password" name="stockactual" class="xxx" type="text" maxlength="255" value="" required /> 
		</div> 
		</li>
		<li id="li_6" >
		<label class="description" for="element_4">Precio Compra </label>
		<div>
			<input id="password" name="preciocompra" class="xxx" type="text" maxlength="255" value="" required /> 
		</div> 
		</li>
		<li id="li_5" >
		<label class="description" for="element_4">Precio Venta </label>
		<div>
			<input id="password" name="precioventa" class="xxx" type="text" maxlength="255" value="" required /> 
		</div> 
		</li>
		<li id="li_5" >
		<label class="description" for="element_4">Proveedor </label>
		<div class="xxx">
			<select name="proveedor" required>
			<?php
			include("conexion.php");
			$con=conectarse();
			$result=$con->query("SELECT * FROM proveedores");
			while($row = $result->fetch_array())
			{
				echo "<option  value='".$row["nit"]."'>".$row["nombre"]."</option>"; 
			}
			?>
			</select>
		</div> 
		</li>
			<br>
			    <input type="hidden" name="form_id" value="1075005" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Registrar" />
		
			</ul>
		</form>	
		<div id="footer">
			
		</div>
	</div>
	<img id="bottom" src="css/bottom.png" alt="">
	</body>
<?php
}
else
{
	header("location: login.php");
}
?>
</html>