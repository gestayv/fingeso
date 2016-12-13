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
					<div class="elementoHeader5">Nombre/Tipo del Reclamo</div>
					<div class="elementoHeader5">Usuario del ticket</div>
					<div class="elementoHeader5">Fecha de Emision</div>
					<div class="elementoHeader5">Prioridad</div>
					<div class="elementoHeader5">Estado</div>
				</div>
				<div class="fila">
					<div class="elemento5">1.1</div>
					<div class="elemento5">1.2</div>
					<div class="elemento5">1.3</div>
					<div class="elemento5">1.4</div>
					<div class="elemento5"> 
						<select name="estado" id="">
							<option value="1">Creado</option>
							<option value="2">En Progreso</option>
							<option value="3">Finalizado</option>
						</select>
					</div>
						
					</div>
				</div>			
			</div>
	</section>
</div>

