<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <style type="text/css">
.wizard {
    margin: 20px auto;
    background: #fff;
}
    .wizard .nav-tabs {
        position: relative;
        margin: 40px auto;
        margin-bottom: 0;
        border-bottom-color: #e0e0e0;
    }
    .wizard > div.wizard-inner {
        position: relative;
    }
.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}
.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}
span.round-tab {
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100px;
    background: #fff;
    border: 2px solid #e0e0e0;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}
span.round-tab i{
    color:#555555;
}
.wizard li.active span.round-tab {
    background: #fff;
    border: 2px solid #5bc0de;
    
}
.wizard li.active span.round-tab i{
    color: #5bc0de;
}
span.round-tab:hover {
    color: #333;
    border: 2px solid #333;
}
.wizard .nav-tabs > li {
    width: 25%;
}
.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #5bc0de;
    transition: 0.1s ease-in-out;
}
.wizard li.active:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #5bc0de;
}
.wizard .nav-tabs > li a {
    width: 70px;
    height: 70px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
}
    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }
.wizard .tab-pane {
    position: relative;
    padding-top: 50px;
}
.wizard h3 {
    margin-top: 0;
}
@media( max-width : 585px ) {
    .wizard {
        width: 90%;
        height: auto !important;
    }
    span.round-tab {
        font-size: 16px;
        width: 50px;
        height: 50px;
        line-height: 50px;
    }
    .wizard .nav-tabs > li a {
        width: 50px;
        height: 50px;
        line-height: 50px;
    }
    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 35%;
    }
}
    </style>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
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
                        <h3>Registrar producto</h3>
                        <div class="col-sm-10 col-sm-offset-1">
                            <label>ID</label>
                            <input id="txtID" type="text" class="form-control">   
                        </div>
                        <div class="col-sm-10 col-sm-offset-1">
                            <label>C&oacute;digo</label>
                            <input id="txtCodigo" type="text" class="form-control">
                        </div>      
                        <div class="col-sm-10 col-sm-offset-1">
                            <label>Nombre</label>
                            <input id="txtNombre" type="text" class="form-control">  
                        </div>
                        <div class="col-sm-10 col-sm-offset-1">
                            <label>Descripcion</label>
                            <input id="txtDescripcion" type="text" class="form-control" >
                        </div>
                        <div class="col-sm-10 col-sm-offset-1">
                            <label>Precio</label>
                            <input id="txtPrecio" type="text" class="form-control">
                        </div>
                        <ul class="list-inline pull-right">
                        <br>
                        <br>
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <h3>Categor&iacute;a</h3>
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
                            <li><button type="button" class="btn btn-default prev-step">Atras</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Continuar</button></li>
                        </ul>
                    </div>
                <div class="tab-pane" role="tabpanel" id="step3">
                    <h3>Step 3</h3>
                    <p>Selecciona el lmacen del producto</p>
                     <select id="sltalmacen" name="sltalmacen" class="form-control">
                        <option value="1">Planta alta</option>
                        <option value="2">Lassebeam</option>
                        <option value="3">lasserbeam 3</option>
                    </select> 
                    <br>
                    <br>
                    <ul class="list-inline pull-right">
                        <li><button type="button" class="btn btn-default prev-step">Atras</button></li>x
                        <li><button type="button" class="btn btn-primary btn-info-full next-step">Continuar</button></li>
                    </ul>
                </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <h3>Completo</h3>
                        <p>You have successfully completed all steps.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>

    <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

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
    </script>
</body>

</html>