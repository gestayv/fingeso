<?php $this->layout = 'fundamenta'; ?>
	<div class="content">
	
		<div class="row">
			<form class="form-horizontal">
				<!-- Primeras Columnas -->
				<div class="col-md-offset-3 col-md-2">
					<div class="form-group">
						<label for="" class="label-control">Unidad</label>
						<select name="unidad" id="" class="form-control">
							<option value="1">Departamento</option>
							<option value="2">Estacionamiento</option>
							<option value="3">Bodega</option>
							<option value="4">Servicio Comun</option>
						</select>
					</div>
					<br>
					<div class="form-group">
						<div class="">
							<label for="" class="label-control">Fecha</label>
							<input type="text" placeholder="31-12-1999" name="fecha" class="form-control">
						</div>
					</div>
					<br>
					<div class="form-group">
						<label for="" class="label-control">Horas</label>
						<select name="Hora" id="" class="form-control">
							<option value=1>Bloque 1 (8:00 - 10:00)</option>
							<option value=2>Bloque 2 (10:00 - 12:00)</option>
							<option value=3>Bloque 3 (14:00 - 16:00)</option>
							<option value=4>Bloque 4 (16:00 - 18:00)</option>
							<option value=5>Bloque 5 (18:00 - 20:00)</option>
						</select>
					</div>
				</div>
				<!-- Segundo Columna -->
				
				<div class="col-md-offset-1 col-md-2">
					<div class="form-group">
						<label for="" class="label-control">Tipo de problema</label>
						<select name="problema" id="" class="form-control">
							<option value="1">Gotera</option>
							<option value="2">Pintura en mal estado</option>
							<option value="3">Grieta</option>
							<option value="4">Otro</option>
						</select>
					</div>						
					<br>
					<div class="form-group">
						<label for="" class="label-control">Habitacion</label>
							<input type="text" placeholder="Baño" name="recinto" class="form-control">	
					</div>
				
					<div class="form-group">
						<label for="" class="label-control">Reclamo</label>
						<textarea class="form-control"name="reclamo" id="" cols="30" rows="12" placeholder="Ingrese su reclamo"></textarea>
					</div>
				</div>
			</form>
		</div>
		<div class="row">
			<button class="btn btn-primary col-md-offset-3 col-md-1" style="background-color:black">Enviar</button>
			<button class="btn btn-primary col-md-offset-3 col-md-1" style="background-color:black">Enviar</button>
		</div>
	</div>
	

				<!-- Botones de centro-->

				<!-- Segun G2: Modificar Estado / Finalizar Ticket -->

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>
