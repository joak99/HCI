<?php 

	include("conexion_bd.php");
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Panel de revistas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<style>h1{
		font-size: 60px
	}
	h4{font-size: 30px}
	#sub{width: 300px;}


	.form-control{
		height: 40px;
		width: 50%;
		background-color: #E1E1E3;}
	#container{position : absolute; 
		width: 1150px; float: left;}
	#container1{width: 650px; float: right;  }
	.input-group{width: 280px; margin-left:80px; align-items:  center; }

	</style>
</head>
<body>
	 
	<div class="container" style="margin-left: 40px">
	<img id="logo" src="img/logo.png" width="150" height="100" align="left" class="rounded-right"></div>
	<div class="container" style="margin-left: 260px">
	<div class="p-5 mb-3 bg-danger text-white">
		<div class="btn-group btn-group-lg" style="margin-left: 100px" role="group" aria-label="..."><h3>Inicio</h3></div>
		<div class="btn-group" style="margin-left: 100px" role="group" aria-label="..."><h3>Temática</h3></div>
		<div class="btn-group btn-group-lg" style="margin-left: 100px" role="group" aria-label="..."><h3>Contacto</h3></div>
		<img src="img/icon_ubicacion_b.png" style="margin-left: 100px" width="65" height="60">
		<img src="img/icon_facebook_b.png" width="65" height="60">
		<img src="img/icon_linkeid_b.png" width="65" height="60">
		</div>
	</div>
	<img src="img/social_media.png" alt="Responsive image" width="700" height="550" align="right" class="rounded-right">
	
	<div class="container" style="margin-top: 100px">
		<div class="row">
			<div class="col-lg-15">

				<div ><h1 >Suscríbete a tus revistas favoritas por solo $29.000 el mes</h1></div>
				<div ><h5 > Para que no te pierdas ningún detalle de los mejores contenidos.</h5></div>
			</div>
		</div>
	</div>
	<div class="p-4 mb-0 bg-danger text-white" style="margin-top: 110px"><h4 align="center">Podrás leer tus revistas desde cualquier lugar, en cualquier dispositivo</h4></div>
	<div id="container" style="margin-top: 100px; margin-left: 50px">
		<div class="row">
			<div class="col-md-5">
				<div align="center"><h4>Conoce si te encuentras registrado en nuestro sistema</h4></div>
				<form method="GET" onsubmit="searchTupla(); return false;">
					<div class="input-group mb-3">
  						<div class="input-group-prepend" style="margin-top: 10px">
    						<span><img src="img/icon_buscar.png" width="50" height="50" style="margin-left: 10px"></span>	
  						</div>
  						<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Numero de identificación" style="margin-top: 12px">
  						

  					 </div>										
					<button type="submit" class="btn btn-danger" style="margin-left: 200px">Buscar</button>
				</form>

				
				<p id="resSus"></p>
				<h4 align="center" style="margin-top: 60px">Suscribirme a una revista</h4>
				<form method="POST" onsubmit="suscribeUser(); return false;">
					


						<div class="input-group" style="margin-top: 10px">
  						<div class="input-group-prepend" style="margin-top: 10px">
    						<span ><img src="img/icon_identificacion.png" width="50" height="50" style="margin-left: 10px"></span>	
  						</div>
  						<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Numero de identificación" style="margin-top: 12px">


  						
  					 </div>
  					 <div class="input-group mb-3">
  							<div class="input-group-prepend">
    							<label><img src="img/icon_revista.png" width="50" height="50" style="margin-left: 10px"></label>
  							</div>
  							<select class="form-control" id="inputGroupSelect01">
  								<option disabled selected="" ="">Selecciona una revista</option>
					      	<?php 
								while($valores = mysqli_fetch_array($queryRevista))
								{
									echo '<option value="'.$valores['id_revista'].'">'.$valores['nombre_revista'].'</option>';
								}
							?>
					    </select>
    
 
					</div>

  					<!-- <div class="input-group" style="margin-top: 10px">
  						<div class="input-group-prepend" style="margin-top: 10px">
    						<label><img src="img/icon_revista.png" width="50" height="50" style="margin-left: 10px"></label>	
  						</div>
  						<select class="custom-select" id="magazine" style="margin-top: 12px" >
							<option disabled selected="" ="">Selecciona una revista</option>
					      	<?php 
								while($valores = mysqli_fetch_array($queryRevista))
								{
									echo '<option value="'.$valores['id_revista'].'">'.$valores['nombre_revista'].'</option>';
								}
							?>
					    </select>
  					
  					
				</div>-->			  						
  					 <div style="margin-left: 185px ; margin-top: 15px"><button align= "center" type="submit" class="btn btn-danger" style="margin-top: 10px" >Suscribirse</button></div>
  					 	
					    
					 </form>   
				</div>
				
			</div>
		</div>
	

	<div id="container1" >
		<div class="row">
			<div class="col-md-7">
			<img src="img/bombillo.png" width="340" height="320" style="margin-left: 150px" align="center">
			<span><label>Estado del suscriptor</label><p id="res">Sin estado actual</p></span>
			</div>
		</div>
		<h4 align="center">Registrate en nuestro sistema</h4>
		<div id="sub" align="center" style="margin-left: 175px"><h6>Aplica para usuarios que no se encuentren registrados</h6></div>
		

		<form method="POST" onsubmit="insertUser(); return false;">
					<div class="form-group">
						
						<label>Identificación</label>
    					<input type="text" class="form-control" id="identification">
						<label>Nombre</label>
    					<input type="text" class="form-control" id="first_name">
    					<label>Apellido</label>
    					<input type="text" class="form-control" id="last_name">
    					<label>Edad</label>
    					<input type="text" class="form-control" id="age">
    					<label>Ciudad</label>
						<select class="form-control" id="city">
							<option value="#">Seleccionar una opción</option>
							<?php 
								while($valores = mysqli_fetch_array($queryCiudad))
								{
									echo '<option value="'.$valores['cod_ciudad'].'">'.$valores['nombre_ciudad'].'</option>';
								}
							?>
					    </select>
					</div>
				<button type="submit" class="btn btn-danger" style="margin-top: 10px">Registrarse</button>
		</form>
		<div class="container" align="right">
		<h5>Aliados:
		<img src="img/cromos.png" width="75" height="32" style="margin-left: 20px">
		<img src="img/fucsia.png" width="75" height="32" style="margin-left: 20px">
		<img src="img/jetset.png" width="75" height="32" style="margin-left: 20px">
		<img src="img/dinero.png" width="75" height="32" style="margin-left: 20px">
		<img src="img/semana.png" width="75" height="32" style="margin-left: 20px">
		</h5>
		
	</div>


	</div>
	
				
				

				
				
	

	<script type="text/javascript" src="src/subject.js"></script>
</body>
</html>