<?php
?>
	<div class="modal-body">	
	
		<div class="row">
			<div class="col-xs-12 text-left form">
				<label class="label">Nombre</label>
				<input id="txtNombre" type="text" maxlength="50" onkeypress="return validarNombre(event)">
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 text-left form">
				<label class="label">Password</label>
				<input  id="txtPassword" type="password">
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 text-left form">
				<label class="label">Correo</label>
				<input id="txtCorreo" type="text"  maxlength="30" placeholder="ejemplo@correo.com" onblur="validarcorreo()">
			</div>
		</div>	

		<div class="row">
			<div class="col-xs-12 text-left form">
				<label class="label">Direcci&oacute;n</label>
				<input id="txtDireccion" type="text" maxlength="30">
			</div>
		</div>	

		<div class="row">
			<div class="col-xs-12 text-left form">
				<label class="label">Tel&eacute;fono</label>
				<input id="txtTelefono" type="text" maxlength="20" onkeypress="return validartelefono(event)">
			</div>
		</div>	

		<div class="row">
			<div class="col-xs-12 text-left form">
				<label class="label" >RFC</label>
				<input id="txtRFC" type="text" maxlength="20" onkeypress="return validarrfc(event)">
			</div>
		</div>					
		<br>
		<button type="button" id="btnRegistro" class="btn btn-success btnregistrar" onclick="capturaPersonal()">
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
<script type="text/javascript">
	function validarNombre(e){
    	key=e.keyCode ||e.which; //captura entada de texto
    	teclado= String.fromCharCode(key).toLowerCase(); //Convierte todo el texto a miniscula
    	letras="abcdefghijklmnñopqrstuvwxyz"; //
    	especiales="8-37-38-46-164"; //espacio, flechas, n
    	teclado_especial=false;

    	for(var i in especiales){
        	if(key==especiales[i]){
            	teclado_especial=true;break;
	        }
    	}
    	if (letras.indexOf(teclado)==-1 && !teclado_especial) { //si Lo que ingresamos esta en letras es 1 si no esta es -1 
	        return false;                           //bloquea la entrada del caracter
    	}
    }

    function validartelefono(e){
        key=e.keyCode ||e.which; //captura entada de texto
        teclado= String.fromCharCode(key);
        numero="0123456789";
        especiales="8-37-38-46";
        teclado_especial=false;
        for(var i in especiales){
            if(key==especiales[i]){
                teclado_especial=true;
            }
        }
        if (numero.indexOf(teclado)==-1 && !teclado_especial) { //si Lo que ingresamos esta en numero es 1 si no esta es -1 
            return false; //bloquea la entrada del caracter
        }
    }

    function validarrfc(e){
        key=e.keyCode ||e.which; //captura entada de texto
        teclado= String.fromCharCode(key);
        numero="0123456789abcdefghijklmnñopqrstuvwxyz";
        especiales="8-37-38-46";
        teclado_especial=false;
        for(var i in especiales){
            if(key==especiales[i]){
                teclado_especial=true;
            }
        }
        if (numero.indexOf(teclado)==-1 && !teclado_especial) { //si Lo que ingresamos esta en numero es 1 si no esta es -1 
            return false; //bloquea la entrada del caracter
        }
    }

	function validarcorreo() {
		var correo=document.getElementById("txtCorreo").value;
		var c=0;
		var p=0;

		for (i=1; i<correo.length; i++) {
			if (correo.charAt(i-1)=="@") {
				c++;
			}
			if (c==1) {
				if (correo.charAt(i-1)==".") {
					p++;
				}
			}
		}
		if (c==1 && p==2 || p==1) {
			document.getElementById("btnRegistro").disabled = false; 
		}
		else{
			document.getElementById("btnRegistro").disabled = true; 
			alert("Inserte un e-mail correcto");
		}
	}
</script>