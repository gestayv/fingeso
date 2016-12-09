<?php $this->layout='fundamenta'?>
	<!--Rectangulo de Reclamos-->
	<title>Menu principal: Propietario</title>
	<div class="container col-lg-offset-1 col-lg-9 col-md-offset-2 col-md-8">
		<div class="tabla">

			<div class="filaHeader">
				<div class="elementoHeader4">Nombre/Tipo del Reclamo</div>
				<div class="elementoHeader4">Fecha Emision</div>
				<div class="elementoHeader4">Estado del Reclamo</div>
				<div class="elementoHeader4">Encuesta de Satisfaccion</div>
			</div>

			<?php foreach ($complaints as $complaint): ?>
			<div class="fila">
				<div class="elemento4">
				<?php echo $complaint->name; ?>
				</div>
				<div class="elemento4">
				<?php echo $complaint->emission_date; ?>
				</div>
				<div class="elemento4">
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
				<div class="elemento4">
					<?= $this->Html->link('Responder Encuestas', ['action' => 'survey'], ['class' => 'btn btn-primary']); ?>
				</div>
			</div>	
			<?php endforeach; ?>
		</div>
	</div>

		
	<!-- Botones de centro?-->


	
	<div class="container">
		<div class="col-md-offset-5" style="margin-top:200px;">
			<?= $this->Html->link('Realizar Reclamo', ['controller' => 'complaints', 'action' => 'add'], ['class' => 'btn btn-primary', 'style' => 'background:black']); ?>
		</div>
	</div>
