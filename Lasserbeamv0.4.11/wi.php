<!DOCTYPE html>
<html>
<head>
    <title>LasserBeam</title>
    <link rel="icon" type="image/png" href="imagenes/hed.png">
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="contwin">
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12 ">
            <img  src="imagenes/logo.png" height="100px">
        </div>
    </div>

    <div class="row">
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-edit"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-filter"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pushpin"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <form role="form">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <h3><b>Registrar producto</b></h3>
                        
                        <div class="col-sm-10 col-sm-offset-1">
                            <label>C&oacute;digo</label>
                            <input id="txtCodigo" type="text" class="form-control" onkeypress="ValidaID()" maxlength="5">
                        </div>      
                        <div class="col-sm-10 col-sm-offset-1">
                            <label>Nombre</label>
                            <input id="txtNombre" type="text" class="form-control" maxlength="20">  
                        </div>
                        <div class="col-sm-10 col-sm-offset-1">
                            <label>Descripci&oacute;n</label>
                            <input id="txtDescripcion" type="text" class="form-control" maxlength="30">
                        </div>
                        <div class="col-sm-10 col-sm-offset-1">
                            <label>Precio</label>
                            <input id="txtPrecio" type="text" class="form-control" onkeypress="Validaprecio()" maxlength="10">
                        </div>
                        <ul class="list-inline pull-right">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                            <li><button type="button" class="btn btn-success next-step">Continuar</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <h3><b>Categor&iacute;a</b></h3>
                        <label>
                            C&oacute;digo: 
                            
                        </label>

                        <p>Selecciona el tipo de producto</p>
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
                        <br>
                        <br>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Atr&aacute;s</button></li>
                            <li><button type="button" class="btn btn-success next-step">Continuar</button></li>
                        </ul>
                    </div>
                <div class="tab-pane" role="tabpanel" id="step3">
                    <h3><b>Almac&eacute;n</b></h3>
                    <p>Selecciona el almac&eacute;n del producto</p>
                     <select id="sltalmacen" name="sltalmacen" class="form-control">
                     <?php
                                $con=conectarse();
                                $result=$con->query("SELECT * FROM almacen");
                                while($row = $result->fetch_array())
                                {
                                  echo "<option  value='".$row["ID_almacen"]."'>".$row["ubicacion"]."</option>"; 
                               }
                            ?>
                     
                    </select> 
                    <br>
                    <br>
                    <ul class="list-inline pull-right">
                        <li><button type="button" class="btn btn-default prev-step">Atr&aacute;s</button></li>
                        <li><button type="button" class="btn btn-success btn-info-full next-step" onclick="capturaProducto()">Continuar</button></li>
                    </ul>
                </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <div id="respuesta" class="row"></div>

                        <ul class="list-inline pull-right">
                            <li> <a href="menu.html" ><button type="button" class="btn btn-success" >Men&uacute;</button></a></li> 
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>

    <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/registroProducto.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });
    $(".next-step").click(function (e) {
        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);
    });
    $(".prev-step").click(function (e) {
        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);
    });
});
function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}

function ValidaID() {
    var tecla = event.keyCode;
    if ((tecla < 48) || (tecla > 57)) 
    event.returnValue = false;
}
function Validaprecio() {
    if ((event.keyCode < 46) || (event.keyCode > 57)) 
    event.returnValue = false;
}
    </script>
</body>

</html>