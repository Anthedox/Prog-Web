<!doctype html>
<html>
<head>
	<meta charset="utf-8" />

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/gsdk-bootstrap-wizard.css" rel="stylesheet" />

</head>
<body>
  <!--   Big container   -->
  <div class="container">
    <div class="row">
    <div class="col-md-8 col-sm-6 col-xs-12"> 
        <!--      Wizard container        -->
        <div class="wizard-container">
          <div class="card wizard-card" data-color="green"  id="wizardProfile">
           <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"  -->        -
            <div class="wizard-header">
              <h3>
                <b>Registo producto</b>
              </h3>
            </div>
			      <div class="wizard-navigation col-md-12 col-sm-12 col-xs-12  ">
				      <ul>
                <li><a href="#about" data-toggle="tab">Producto</a></li>
                <li><a href="#account" data-toggle="tab">Categoria</a></li>
                <li><a href="#address" data-toggle="tab">Ubicaci&oacute;n</a></li>
              </ul>
	   				</div>

            <div class="tab-content">
                <div class="tab-pane" id="about">
                  <div class="row">
                   <h4 class="info-text">Producto</h4>
                                  
                   <div class="col-sm-10 col-sm-offset-1">
                       <div class="form-group">
                        <label>ID</label>
                        <input id="txtID" type="text" class="form-control">
                      </div>
                  </div>
                  <div class="col-sm-10 col-sm-offset-1">
                      <div class="form-group">
                        <label>C&oacute;digo</label>
                        <input id="txtCodigo" type="text" class="form-control">
                      </div>
                  </div>
                  <div class="col-sm-10 col-sm-offset-1">
                      <div class="form-group">
                          <label>Nombre</label>
                          <input id="txtNombre" type="text" class="form-control">
                      </div>
                              </div>
                  <div class="col-sm-10 col-sm-offset-1">
                    <div class="form-group">
                              <label>Descripcion</label>
                        <input id="txtDescripcion" type="text" class="form-control" >
                    </div>
                </div>
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="form-group">
                        <label>Precio</label>
                        <input id="txtPrecio" type="text" class="form-control">
                    </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="account">
             <div class="col-sm-8">
                <h4 class="info-text"> Categoria del producto</h4>
                          <div class="row">
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
                    </div>
                 <div class="tab-pane" id="address">
                        <div class="row">
                                    <div class="col-sm-8">
                             <h4 class="info-text"> Almacen del producto</h4>
                              <div class="form-group">
                                  <select id="sltalmacen" name="sltalmacen" class="form-control">
                                     <option value="1">Planta alta</option>
                                     <option value="2">Lassebeam</option>
                                     <option value="3">lasserbeam 3</option>
                                 </select>
                               </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="wizard-footer height-wizard">
                 <div class="pull-right">
                     <input type='button' class='btn btn-next btn-fill btn-success btn-wd btn-sm' name='next' value='Next'>
                     <input type='button' class='btn btn-finish btn-fill btn-success btn-wd btn-sm' name='finish' value='Finish' onclick="capturaProducto()">
               </div>
                    <div class="pull-left">
                        <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </div> <!-- wizard container -->
</div>
        </div><!-- end row -->
    </div> <!--  big container -->


</div>

</body>

	<!--   Core JS Files   -->
	<script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="js/gsdk-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="js/jquery.validate.min.js"></script>
<script src="js/registroProducto.js" type="text/javascript"></script>
</html>
