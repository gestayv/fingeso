<?php $this->layout = 'fundamenta'; ?>
	<div class="content">
	
		<div class="row">
			<form action="" class="form-horizontal">
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
							<label for="" class="label-control">Fechas</label>
							<div class="tabla">
								<div class="filaHeader">
									<div class="elementoHeader7">L</div>
									<div class="elementoHeader7">M</div>
									<div class="elementoHeader7">W</div>
									<div class="elementoHeader7">J</div>
									<div class="elementoHeader7">V</div>
									<div class="elementoHeader7">S</div>
									<div class="elementoHeader7">D</div>
								</div>
								<div class="fila">
									<div class="elemento7">1</div>
									<div class="elemento7">2</div>
									<div class="elemento7">3</div>
									<div class="elemento7">4</div>
									<div class="elemento7">5</div>
									<div class="elemento7">6</div>
									<div class="elemento7">7</div>
								</div>
								<div class="fila">
									<div class="elemento7">8</div>
									<div class="elemento7">9</div>
									<div class="elemento7">10</div>
									<div class="elemento7">11</div>
									<div class="elemento7">12</div>
									<div class="elemento7">13</div>
									<div class="elemento7">14</div>
								</div>
								<div class="fila">
									<div class="elemento7">15</div>
									<div class="elemento7">16</div>
									<div class="elemento7">17</div>
									<div class="elemento7">18</div>
									<div class="elemento7">19</div>
									<div class="elemento7">20</div>
									<div class="elemento7">21</div>
								</div>
								<div class="fila">
									<div class="elemento7">22</div>
									<div class="elemento7">23</div>
									<div class="elemento7">24</div>
									<div class="elemento7">25</div>
									<div class="elemento7">26</div>
									<div class="elemento7">27</div>
									<div class="elemento7">28</div>
								</div>
								<div class="fila">
									<div class="elemento7">29</div>
									<div class="elemento7">30</div>
									<div class="elemento7">31</div>
									<div class="elemento7"></div>
									<div class="elemento7"></div>
									<div class="elemento7"></div>
									<div class="elemento7"></div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="form-group">
						<label for="" class="label-control">Horas</label>
						<select name="Hora" id="" class="form-control">
							<option value="1">Bloque Manana (8:00 - 12:00)</option>
							<option value="2">Bloque Tarde (14:00 - 18:00)</option>
							<option value="3">Bloque Noche (18:00 - 22:00)</option>
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
							<input type="text" name="recinto" class="form-control">	
					</div>
				
					<div class="form-group">
						<label for="" class="label-control">Reclamo</label>
						<textarea class="form-control"name="reclamo" id="" cols="30" rows="12" placeholder="Ingrese su reclamo"></textarea>
					</div>
				</div>
			</form>
		</div>
		<div class="row">
			<button class="btn btn-primary col-md-offset-7 col-md-1" style="background-color:black">Enviar</button>
		</div>
	</div>
	

				<!-- Botones de centro-->

				<!-- Segun G2: Modificar Estado / Finalizar Ticket -->

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>