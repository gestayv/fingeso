<!-- src/Template/Executors/index.ctp -->
<!--Rectangulo de Reclamos-->
<?php $this->layout = 'fundamenta';?>
<title>Reclamos asignados</title>
	
<div class="content">
	<section class="main-row">
		<!--Buscador -->
		<div class="col-md-offset-1 col-md-2">
			<label for="" class="">Buscador de texto</label>
			<div class="form-group">
				<input type="text" class="buscador" placeholder="Nombre de usuario:">
				<input type="text" class="buscador" placeholder="Rut:">
				<input type="text" class="buscador" placeholder="Tipo de usuario:">
		    </div>
		    <div class="form-group text-center">
		    	<button class="btn btn-primary text-center">Buscar</button>
		    </div>
		</div>
		<div class="col-md-8">
			<div class="tabla">
				<div class="filaHeader">
					<div class="elementoHeader6">Nombre/Tipo del Reclamo</div>
					<div class="elementoHeader6">Usuario del ticket</div>
					<div class="elementoHeader6">Fecha de Emision</div>
					<div class="elementoHeader6">Prioridad</div>
					<div class="elementoHeader6">Estado</div>
					<div class="elementoHeader6">Seleccion</div>
				</div>
				<div class="fila">
					<div class="elemento6">1.1</div>
					<div class="elemento6">1.2</div>
					<div class="elemento6">1.3</div>
					<div class="elemento6">1.4</div>
					<div class="elemento6">1.5</div>
					<div class="button6">
						<div class="elementudbutton">
							<button class="btn btn-primary" style="background:black;padding:1px 5px;font-size:10px;">Asignar Ejecutor</button>
						</div>
						<div class="elementudbutton">
							<button class="btn btn-primary" style="background:black;padding:1px 5px;font-size:10px;">Revisar Encuesta</button>
						</div>
					</div>
				</div>			
			</div>
	</section>
</div>

