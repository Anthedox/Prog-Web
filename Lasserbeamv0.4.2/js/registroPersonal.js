function capturaPersonal(){
	var url = "registrar_personal2.php";

	$.post(url, {
				nombre:$("#txtNombre").val(), 
				password:$("#txtPassword").val(),
				correo:$("#txtCorreo").val(),
				direccion:$("#txtDireccion").val(),
				telefono:$("#txtTelefono").val(),
				rfc:$("#txtRFC").val()				
				}, function(data){
					$("#respuesta").html(data);
				});			
}