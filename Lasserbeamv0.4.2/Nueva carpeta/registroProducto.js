function capturaProducto(){
	var url = "registrar_producto2.php";

	$.post(url, {
				id:$("#txtID").val(), 
				codigo:$("#txtCodigo").val(),
				nombre:$("#txtNombre").val(),
				descripcion:$("#txtDescripcion").val(),
				precio:$("#txtPrecio").val(),
				categoria:$("#sltcategoria").val(),	
				almacen:$("#sltalmacen").val()			
				}, function(data){
					$("#respuesta").html(data);
				});			
}