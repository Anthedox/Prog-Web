<?php

error_reporting(E_ALL);

include("conexion.php");

$nombre=$_POST['nombre'];
$password=$_POST['password'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$rfc=$_POST['rfc'];

utf8_decode($nombre);
utf8_decode($password);
utf8_decode($correo);
utf8_decode($direccion);
utf8_decode($telefono);
utf8_decode($rfc);

$nombre = str_replace("'", "\'", $nombre);
$password = str_replace("'", "\'", $password);
$correo = str_replace("'", "\'", $correo);
$direccion = str_replace("'", "\'", $direccion);
$telefono = str_replace("'", "\'", $telefono);
$rfc = str_replace("'", "\'", $rfc);

try{
	$con=conectarse();
	$result=$con->query("INSERT INTO usuarios(nombre, contrasena, correo, direccion, telefono, rfc) 
	VALUES ('$nombre', '$password', '$correo', '$direccion', '$telefono', '$rfc')");
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