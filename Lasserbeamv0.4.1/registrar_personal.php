<?php
?>
	<div class="modal-body">	
	
		<div class="row">
			<div class="col-xs-12 text-left">
				<label>Nombre</label>
				<input id="txtNombre" type="text" maxlength="50">
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 text-left">
				<label>Password</label>
				<input id="txtPassword" type="password">
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 text-left">
				<label>Correo</label>
				<input id="txtCorreo" type="text" maxlength="30">
			</div>
		</div>	

		<div class="row">
			<div class="col-xs-12 text-left">
				<label>Direcci&oacute;n</label>
				<input id="txtDireccion" type="text" maxlength="30">
			</div>
		</div>	

		<div class="row">
			<div class="col-xs-12 text-left">
				<label>Tel&eacute;fono</label>
				<input id="txtTelefono" type="text" maxlength="20">
			</div>
		</div>	

		<div class="row">
			<div class="col-xs-12 text-left">
				<label>RFC</label>
				<input id="txtRFC" type="text" maxlength="20">
			</div>
		</div>					

		<button type="button" class="btn btn-success" onclick="capturaPersonal()">
			Registrarse
		</button>

		<div id="respuesta" class="row"></div>
	</div>

	<div class="modal-footer">
		<button type="button" class="btn btn-danger" onclick="cerrarModal()">
			<span class="glyphicon glyphicon-remove"> </span>
		</button>
	</div>

<script src="js/registroPersonal.js" type="text/javascript"></script>