<!DOCTYPE html >
<?php
session_start();
if($_SESSION['ok']=="ok")
{
?>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Productos</title>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" media="all">
<script type="text/javascript" src="jquery-1.4.2.min"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	
	<img id="top" src="css/top.png" alt="">
	<div class="contenedor">
	
		<h1><a class="t">Productos</a></h1>
		<form id="form_1075005"   method="post" action="productos.php">
					<div class="form_description">
					<a title=" " href="registrar_producto.php">  <img src="css/newc.jpg"> Registrar Producto Nuevo?  </a>
			<p></p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">ID </label>
		<div>
			<input id="cc" name="id" class="xxx" type="text" maxlength="255" value="" required /> 
		</div> 
		</li>					
		<br>
			    <input type="hidden" name="form_id" value="1075005" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Buscar" />
		
			</ul>
			
		
		</form>	
		<div id="footer">
			
		</div>
	</div>
		
	<style>
	
	table
	{
		border: 2px solid rgb(25,75,121);		
		width: 100%;
    }
    
	h3
	{
		color: #FF8000;
		text-align: center;
		text-decoration: line-through;
	}
	img{
		 height: 18px;
         width: 18px;
	}
	
	</style>	
	
	<?php

		if(isset($_POST['submit']))
		{
			include("conexion.php");
			$con=conectarse();
			$id=$_POST['id'];
			$result=$con->query("SELECT p.*, p2.nombre as nom FROM productos p inner join proveedores p2 on p.nitproveedor=p2.nit WHERE p.id='$id'");
			
	?>
	
	<img id="top" src="css/top.png" alt="">
	<center><a href="almacen.php"><---</a></center>
	<div class="contenedor">
	
		<?php
		if($result->num_rows > 0)
		{
		?>
		
		<table id="form_1075005" class="appnitro" cellspacing="8" cellpadding="3">
		
				
		<tr bgcolor="#084B8A">
		 <td align="center">ID</td>
		 <td align="center">NOMBRE</td>
		 <td align="center">STOCK MINIMO</td>
		 <td align="center">STOCK MAXIMO</td>
		 <td align="center">STOCK ACTUAL</td>
		 <td align="center">PRECIO COMPRA</td>
		 <td align="center">PRECIO VENTA</td>
		 <td align="center">PROVEEDOR</td>
		 <td align="center">< - --- - ></td>
		</tr>
		
		<?php
		$row = $result->fetch_array();
		?>
			
			<tr>
			 <td align="center"><?php echo $row['id']; ?></td>
			 <td align="center"><?php echo $row['nombre'];?></td>
			 <td align="center"><?php echo $row['stockmin']; ?></td>
			 <td align="center"><?php echo $row['stockmax']; ?></td>
			 <td align="center"><?php echo $row['stockactual']; ?></td>
			 <td align="center"><?php echo $row['preciocompra']; ?></td>
			 <td align="center"><?php echo $row['precioventa']; ?></td>
			 <td align="center"><?php echo $row['nom']; ?></td>
			 <td align="center"><a title=" Eliminar? " href="eliminar_producto.php?id=<?php echo $row['id']; ?>"><font size='5' color="#FF8071">x</font></a>&nbsp <a title=" Editar? " href="editar_producto.php?id=<?php echo $row['id']; ?>">  <img src="css/edit.jpg">  </a> </td>
			</tr>
			<tr>
				<td align="center" colspan="9"><a href="productos.php"><--</a></td>
			</tr>
		</table>	
		
	</div>
      
	<?php
	
		}
		else
		{
			echo "<H3>SIN RESULTADOS</H3>";
		}
		}	

		if(!isset($_POST['submit']))
		{
			include("conexion.php");
			$con=conectarse();
			
			$result=$con->query("SELECT p.*, p2.nombre as nom FROM productos p inner join proveedores p2 on p.nitproveedor=p2.nit");
			
	?>
	
	<img id="top" src="css/top.png" alt="">
	<center><a href="almacen.php">&lt;--- Ir a inicio</a></center>
	<div class="contenedor">
	
		<?php
		if($result->num_rows > 0)
		{
		?>
		
		<table id="form_1075005" class="appnitro" cellspacing="8" cellpadding="3">
		
				
		<tr bgcolor="#084B8A">
		 <td align="center">ID</td>
		 <td align="center">NOMBRE</td>
		 <td align="center">STOCK MINIMO</td>
		 <td align="center">STOCK MAXIMO</td>
		 <td align="center">STOCK ACTUAL</td>
		 <td align="center">PRECIO COMPRA</td>
		 <td align="center">PRECIO VENTA</td>
		 <td align="center">PROVEEDOR</td>
		 <td align="center">< - --- - ></td>
		</tr>
		
		<?php
		while($row = $result->fetch_array())
		{
		?>
			
			<tr>
			 <td align="center"><?php echo $row['id']; ?></td>
			 <td align="center"><?php echo $row['nombre'];?></td>
			 <td align="center"><?php echo $row['stockmin']; ?></td>
			 <td align="center"><?php echo $row['stockmax']; ?></td>
			 <td align="center"><?php echo $row['stockactual']; ?></td>
			 <td align="center"><?php echo $row['preciocompra']; ?></td>
			 <td align="center"><?php echo $row['precioventa']; ?></td>
			 <td align="center"><?php echo $row['nom']; ?></td>
			 <td align="center"><a title=" Eliminar? " href="eliminar_producto.php?id=<?php echo $row['id']; ?>"><font size='5' color="#FF8071">x</font></a>&nbsp <a title=" Editar? " href="editar_producto.php?id=<?php echo $row['id']; ?>">  <img src="css/edit.jpg">  </a> </td>
			</tr>
		<?php
		}
		?>		
		</table>	
		
	</div>
      
	<?php
		}
		}		
		
	?>	
		
	<img id="bottom" src="css/bottom.png" alt="">
	<center><a href="almacen.php"><---</a></center>
	</body>
<?php
}
else
{
	header("location: login.php");
}
?>
</html>