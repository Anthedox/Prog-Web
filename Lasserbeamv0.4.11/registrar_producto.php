<div class="modal-body">
	<div class="row">
		<div class="col-xs-12 text-left form">
			<label>ID</label>
			<input id="txtID" type="text" maxlength="50">
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 text-left form">
			<label>C&oacute;digo producto</label>
			<input  id="txtCodigo" type="text" maxlength="50">
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 text-left form">
			<label>Nombre</label>
			<input id="txtNombre" type="text" maxlength="30">
		</div>
	</div>	

	<div class="row">
		<div class="col-xs-12 text-left form">
			<label>Descripci&oacute;n</label>
			<input id="txtDescripcion" type="text" maxlength="30">
		</div>
	</div>	

	<div class="row">
		<div class="col-xs-12 text-left form">
			<label>Precio venta</label>
			<input id="txtPrecio" type="text" maxlength="20">
		</div>
	</div>	

	<div class="row">
		<div class="col-xs-12 text-left form">
			<label>Categor&iacute;a </label>
				<select class="form-control" name="sltcategoria" id="sltcategoria">
					<?php
						include("conexion.php");
						$con=conectarse();
						$result=$con->query("SELECT * FROM categoria");
						while($row = $result->fetch_array())
						{
							echo "<option  value='".$row["ID_categoria"]."'>".$row["descripcion"]."</option>"; 
						}
					?>
				</select>
		</div> 
	</div> 			
	<div class="row">
		<div class="col-xs-12 text-left form">
			<label>Almacen </label>
			<select class="form-control" name="sltalmacen" id="sltalmacen">
				<option value="1">Planta alta</option>
				<option value="2">Lassebeam</option>
				<option value="3">lasserbeam 3</option>
				<?php
				#	include("conexion.php");
				#	$cone=conectarse();
				#	$result=$cone->query("SELECT * FROM almacen");
				#	while($row = $result->fetch_array())
				#	{
				#		echo "<option  value='".$row["ID_almacen"]."'>".$row["ubicacion"]."</option>"; 
				#	}
				?>
			</select>
		</div>
	</div>
	
	<br>
	<button type="button" class="btn btn-success btnregistrar" onclick="capturaProducto()">
			Registrarse
		</button>

		<div id="respuesta" class="row"></div>
	</div>

	<div class="modal-footer">
		<button type="button" class="btn btn-danger" onclick="cerrarModal()">
			<span class="glyphicon glyphicon-remove"> </span>
		</button>
	</div>		
</div>		
<script src="js/registroProducto.js" type="text/javascript"></script>