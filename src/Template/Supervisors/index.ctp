<?php $this->layout='fundamenta'?>	

	<title>Menu principal: Supervisor</title>
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
			<!--Rectangulo de Reclamos-->
			<div class="col-md-8">
				<div class="tabla">
					<div class="filaHeader">
						<div class="elementoHeader7">Ticket</div>
						<div class="elementoHeader7">Nombre Usuario</div>
						<div class="elementoHeader7">Ejecutor Asignado</div>
						<div class="elementoHeader7">Prioridad Ticket</div>
						<div class="elementoHeader7">Estado Ticket</div>
						<div class="elementoHeader7">Estado Encuesta</div>
						<div class="elementoHeader7">Seleccion</div>
					</div>
					<div class="fila">
						<div class="elemento7">1.1</div>
						<div class="elemento7">1.2</div>
						<div class="elemento7">1.3</div>
						<div class="elemento7">1.4</div>
						<div class="elemento7">1.5</div>
						<div class="elemento7">1.6</div>
						<div class="elemento7">	
							<label><input type="radio" id="q1" name="grupo" value="1">Seleccionar</label>
						</div>
					</div>
					<div class="fila">
						<div class="elemento7">2.1</div>
						<div class="elemento7">2.2</div>
						<div class="elemento7">2.3</div>
						<div class="elemento7">2.4</div>
						<div class="elemento7">2.5</div>
						<div class="elemento7">2.6</div>
						<div class="elemento7">
							<label><input type="radio" id="q1" name="grupo" value="2">Seleccionar</label>
						</div>
					</div>	
				</div>

				<!-- Botones de centro-->
				<!-- Segun G2: Modificar Estado / Finalizar Ticket -->

				<div class="row text-center" style="margin-top:50px">
						<button class="btn btn-primary" style="background:black">Asignar Ejecutor</button>
						<button class="btn btn-primary" style="background:black">Revisar Encuenta</button>
				</div>
			</div>
		</section>
	</div>
