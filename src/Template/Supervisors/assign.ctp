<?php $this->layout='fundamenta'?>	
<div>
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
			<!--Tabla -->
			<div class="col-md-8">
				<div class="tabla">
					<div class="filaHeader">
						<div class="elementoHeader4">Nombre Ejecutor</div>
						<div class="elementoHeader4">Apellido Ejecutor</div>
						<div class="elementoHeader4">Rut</div>
						<div class="elementoHeader4">Seleccionar</div>
					</div>
					<div class="fila">
						<div class="elemento4">1.1</div>
						<div class="elemento4">1.2</div>
						<div class="elemento4">1.3</div>
						<div class="elemento4">
							<button class="btn btn-primary" style="background:black;padding:2px 50px;font-size:12px;">
							Seleccionar Ejecutor</button>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>