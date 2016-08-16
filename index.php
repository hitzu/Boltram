<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'inc/cabecera.php'; ?>
	<!-- Aleatorizar el background -->
	<?php 
	$background = array('img/slide1.jpg', 'img/slide3.jpg', 'img/slide4.jpg');
	$i = rand(0, count($background)-1); 
	$seleccion = "".$background[$i];
	?>
	<style type="text/css">
		.fondo_principal
		{
			background-image: url(<?php echo $seleccion; ?>);
		}
	</style>
	<title>Bolsa de trabajo y servicios mexicana</title>
</head>
<body>
	<!--Aqui ira el include para el menu-->
	<?php include 'inc/menu.php'; ?>
	
	<!--empieza pagina index.php-->
	<div class="container-fluid fondo_principal" id="principal_index">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1>¡Tu proximo trabajo te esta esperando!</h1>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-xs-12">
					<form action="" id="forma-principal">
						<div class="form-group">
							<label for="trabajo">Ingresa el trabajo que buscas</label>
							<input class="form-control" type="text" id="trabajo" name="trabajo" placeholder="Maestro, Secretaria, Programador, Etc"/>
						</div>
						<br>
						<div class="form-group">
							<label for="lugar">¿En donde?</label>
							<input class="form-control" type="text" id="lugar" name="lugar" placeholder="Puebla, Queretaro, Oaxaca, Etc"/> 
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid seccion-servicios">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1>¡Nuestros servicios!</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-4">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sed quis non? Iusto, nulla! Nam.</p>
				</div>
				<div class="col-xs-12 col-md-4">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sed quis non? Iusto, nulla! Nam.</p>
				</div>
				<div class="col-xs-12 col-md-4">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sed quis non? Iusto, nulla! Nam.</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-4">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sed quis non? Iusto, nulla! Nam.</p>
				</div>
				<div class="col-xs-12 col-md-4">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sed quis non? Iusto, nulla! Nam.</p>
				</div>
				<div class="col-xs-12 col-md-4">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sed quis non? Iusto, nulla! Nam.</p>
				</div>
			</div>
		</div>
	</div>


	<?php include 'inc/footer.php'; ?>
	<!--Aqui ira el include para el footer-->
	<?php include 'inc/footer_js.php'; ?>
</body>
</html>