<!DOCTYPE html>
<?php
session_start();
if($_SESSION['ok']=="ok")
{
?>
<html>
<?php
if(isset($_GET['id']))
{
	include("conexion.php");
	$con=conectarse();
	$id=$_GET['id'];
	$result=$con->query("SELECT * FROM productos WHERE id='$id'");
	$row = $result->fetch_array();
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Modificar Datos Del Producto</title>
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
		<a href="almacen.php">&lt;--- Ir a inicio</a>
		<h1><a>Modificar Datos Del Producto</a></h1>
		<form id="form_1075005" class="appnitro"  method="post" action="editar_producto.php">
					<div class="form_description">
			<p></p>
		</div>						
			<ul >
			
		<li id="li_1" >
		<label class="description" for="element_1">ID </label>
		<div>
			<input id="cc" name="id" class="xxx" type="text" maxlength="255" value="<?php echo $row['id']; ?>" readonly /> 
		</div> 
		</li>
		<li id="li_2" >
		<label class="description" for="element_1">Nombre </label>
		<div>
			<input id="cc" name="nombre" class="xxx" type="text" maxlength="255" value="<?php echo $row['nombre']; ?>" required /> 
		</div> 
		</li>			
		<li id="li_3" >
		<label class="description" for="element_3">Stock Minimo </label>
		<div>
			<input id="cargo" name="stockmin" class="xxx" type="text" maxlength="255" value="<?php echo $row['stockmin']; ?>" required /> 
		</div> 
		</li>
		<li id="li_4" >
		<label class="description" for="element_4">Stock Maximo </label>
		<div>
			<input id="password" name="stockmax" class="xxx" type="text" maxlength="255" value="<?php echo $row['stockmax']; ?>" required /> 
		</div> 
		</li>
		<li id="li_6" >
		<label class="description" for="element_4">Stock Actual </label>
		<div>
			<input id="password" name="stockactual" class="xxx" type="text" maxlength="255" value="<?php echo $row['stockactual']; ?>" required /> 
		</div> 
		</li>
		<li id="li_7" >
		<label class="description" for="element_4">Precio Compra </label>
		<div>
			<input id="password" name="preciocompra" class="xxx" type="text" maxlength="255" value="<?php echo $row['preciocompra']; ?>" required /> 
		</div> 
		</li>
		<li id="li_8" >
		<label class="description" for="element_4">Precio Venta </label>
		<div>
			<input id="password" name="precioventa" class="xxx" type="text" maxlength="255" value="<?php echo $row['precioventa']; ?>" required /> 
		</div> 
		</li>
		<li id="li_9" >
		<label class="description" for="element_4">Proveedor</label>
		<div class="xxx">
			<select name="proveedor" required>
			<?php			
			$result2=$con->query("SELECT * FROM proveedores");
			while($row2 = $result2->fetch_array())
			{
				?>
				 <option  value="<?php echo $row2['nit']; ?>"  <?php if($row['nitproveedor'] == $row2['nit']){ ?> selected <?php } ?> > <?php echo $row2['nombre']; ?> </option> 
				<?php
			}
			?>
			</select> 
		</div> 
		</li>
			<br>
			    <input type="hidden" name="form_id" value="1075005" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Modificar" />
	
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
	if(isset($_POST['submit']))
	{
		include("conexion.php");
	    $con=conectarse();
		$id=$_POST['id'];
		$nombre=$_POST['nombre'];
		$stockmin=$_POST['stockmin'];
		$stockmax=$_POST['stockmax'];
		$stockactual=$_POST['stockactual'];	
		$preciocompra=$_POST['preciocompra'];	
		$precioventa=$_POST['precioventa'];	
		$proveedor=$_POST['proveedor'];			
		$result=$con->query("UPDATE productos SET nombre='$nombre', stockmin='$stockmin', stockmax='$stockmax', stockactual='$stockactual', preciocompra='$preciocompra', precioventa='$precioventa', nitproveedor='$proveedor' WHERE id='$id'");
	}
?>
	<meta http-equiv='refresh' content='1; url=productos.php' />
<?php
}



?>
	<?php
}
else
{
	header("location: login.php");
}
?>
</html>