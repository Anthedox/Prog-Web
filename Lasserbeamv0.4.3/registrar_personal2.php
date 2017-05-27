<?php

error_reporting(E_ALL);

include("conexion.php");


$nombre=addslashes(utf8_decode($_POST['nombre']));
$password=addslashes(utf8_decode($_POST['password']));
$correo=addslashes(utf8_decode($_POST['correo']));
$direccion=addslashes(utf8_decode($_POST['direccion']));
$telefono=addslashes(utf8_decode($_POST['telefono']));
$rfc=addslashes(utf8_decode($_POST['rfc']));
$passworden=password_hash($password,PASSWORD_BCRYPT);

try{
	$con=conectarse();
	$result=$con->query("INSERT INTO usuarios(nombre, contrasena, correo, direccion, telefono, rfc) 
	VALUES ('$nombre', '$passworden', '$correo', '$direccion', '$telefono', '$rfc')");
	if($result)
	{
		?>

			<div class="text-success text-center">
				<p>Operaci&oacute; realizada con &eacute;xito</p>
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