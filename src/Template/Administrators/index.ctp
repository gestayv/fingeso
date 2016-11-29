<!--Rectangulo de Reclamos-->
<?php $this->layout = 'fundamenta';?>
	<div class="container col-lg-offset-1 col-lg-9 col-md-offset-2 col-md-8">
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
				<div class="elemento6">
					<label>
					<input type="radio" id="q1" name="grupo" value="1">Seleccionar</label>
				</div>
			</div>
			<div class="fila">
				<div class="elemento6">2.1</div>
				<div class="elemento6">2.2</div>
				<div class="elemento6">2.3</div>
				<div class="elemento6">2.4</div>
				<div class="elemento6">2.5</div>
				<div class="elemento6">
					<label>
					<input type="radio" id="q1" name="grupo" value="2">Seleccionar</label>
				</div>
			</div>	
			<div class="fila">
				<div class="elemento6">3.1</div>
				<div class="elemento6">3.2</div>
				<div class="elemento6">3.3</div>
				<div class="elemento6">3.4</div>
				<div class="elemento6">3.5</div>
				<div class="elemento6">
					<label>
					<input type="radio" id="q1" name="grupo" value="3">Seleccionar</label>
				</div>
			</div>					
			
		</div>
	</div>

		
	<!-- Botones de centro-->
	<!-- Segun G2: Modificar Estado / Finalizar Ticket -->


	<div class="container" style="margin-top:200px">
		<div class="col-md-offset-3 col-md-3">
			<button class="btn btn-primary" style="background:black">Modificar Estado</button>
		</div>
		<div class="col-md-offser-3 col-md-3">
			<button class="btn btn-primary" style="background:black">Finalizar Ticket</button>
		</div>
	</div>


	


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>