<?php

error_reporting(E_ALL);

include("conexion.php");

$codigo=addslashes(utf8_decode($_POST['codigo']));
$nombre=addslashes(utf8_decode($_POST['nombre']));
$descripcion=addslashes(utf8_decode($_POST['descripcion']));
$precio=addslashes(utf8_decode($_POST['precio']));
$categoria=addslashes(utf8_decode($_POST['categoria']));
$almacen=addslashes(utf8_decode($_POST['almacen']));


try{
	$con=conectarse();
	$result=$con->query("INSERT INTO productos(codigoProducto, nombre, descripcion, precioVenta, ID_categoria, ID_almacen) 
	VALUES ('$codigo','$nombre', '$descripcion', '$precio', '$categoria', '$almacen')");
	
	if($result)
	{
		?>

			<div class="text-success text-center">
				<p>Operaci&oacute;n realizada con &eacute;xito</p>
			</div>

			<?php
	}
	else
	{
		?>
			<div class="text-danger text-center">
				<p>Operaci&oacute;n no realizada</p>
			</div>

			<?php
	}
}
catch(Exception $e){
	throw $e;
}
