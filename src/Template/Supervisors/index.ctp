<?php $this->layout='fundamenta'?>	

	<br>
	<br>
	<title>Menu principal: Supervisor</title>
	<div class="">
		
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
					
					<?php foreach ($complaints as $complaint): ?>
					<div class="fila">
						    <div class="elemento7">
						    	<?php echo $complaint->id; ?>
						    </div>
						    <div class="elemento7">
						    	<?php echo $complaint->owner->name; ?>
						    </div>
						    <div class="elemento7">
						    	<?php echo $complaint->executor->name; ?>
						    </div>
						    <div class="elemento7">
						    	<?php 
						    		switch ($complaint->priority) {
						    			case 1:
						    				echo 'Mínima';
						    				break;
						    			
						    			case 2:
						    				echo 'Baja';
						    				break;

						    			case 3:
						    				echo 'Media';
						    				break;
						    				
						    			case 4:
						    				echo 'Alta';
						    				break;

						    			case 5:
						    				echo 'Urgente';
						    				break;
						    		}

						    	?>
						    </div>
						    <div class="elemento7">
						    	<?php
						    		if($complaint->status == 0) 
						    		{
							    		echo 'Pendiente';
						    		}
						    		elseif ($complaint->status == 1) {
						    			echo 'En progreso';
						    		}
						    		elseif ($complaint->status == 2) {
						    			echo 'Resuelto';
						    		}
						    	?>
						    </div>
						    <div class="elemento7">
						    	<?php
						    		if($complaint->surveys[0]->status == 0) 
						    		{
							    		echo 'Pendiente';
						    		}
						    		elseif ($complaint->surveys[0]->status == 1) {
						    			echo 'Resuelta';
						    		}
						    	?>
						    </div>
						    <div class="button7">
								<div class="elementudbutton">
								<?= $this->Html->link('Asignar Ejecutor', ['action' => 'assign', $complaint->id], ['class' => 'btn btn-primary', 'style' => 'background:black;padding:1px 5px;font-size:10px']); ?>
								</div>
								<div class="elementudbutton">
									<button class="btn btn-primary" style="background:black;padding:1px 5px;font-size:10px;">Revisar Encuesta</button>
								</div>
							</div>
					</div>
					
					<?php endforeach; ?>
				</div>

				<!-- Botones de centro-->
				<!-- Segun G2: Modificar Estado / Finalizar Ticket -->
			</div>
		</section>
	</div>
