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
				<?php 
					foreach ($executors as $exec) {
						echo '<div class="fila">
							<div class="elemento4">'.$exec->name.'</div>
							<div class="elemento4">'.$exec->surname.'</div>
							<div class="elemento4">'.$exec->rut.'</div>';

						echo '<div class="elemento4">
								<form method="post">
									<input type="hidden" name="action" value="asignar">
									<input type="hidden" name="exec_id" value="'.$exec->id.'">
									<input type="submit" value="Seleccionar Ejecutor" class="btn btn-primary" style="background:black;padding:2px 50px;font-size:12px;">
								</form>
							</div>
							</div>';
					}
				?>
				</div>
			</div>
		</section>
	</div>