 <!-- src/Template/Executors/index.ctp -->
<!--Rectangulo de Reclamos-->
<?php $this->layout = 'fundamenta';?>
<title>Reclamos asignados</title>
	
<div class="content">
	<section class="main-row">
		<!--Buscador -->
		<div class="col-md-offset-1 col-md-2">
			<label>Buscador de texto</label>
			<div class="form-group">
				<input type="text" class="buscador" placeholder="Nombre de usuario:">
				<input type="text" class="buscador" placeholder="Rut:">
				<input type="text" class="buscador" placeholder="Tipo de usuario:">
		    </div>
		    <div class="form-group text-center">
		    	<button class="btn btn-primary text-center">Buscar</button>
		    </div>
		</div>
		<?= $this->Form->create(NULL, ['class' => 'form-horizontal', 'id' => 'formulario']); ?>
		<div class="col-md-8">
			<div class="tabla">
				<div class="filaHeader">
					<div name="complaint_name" 		class="elementoHeader5">Nombre/Tipo del Reclamo</div>
					<div name="user_name" 			class="elementoHeader5">Usuario del ticket</div>
					<div name="complaint_date" 		class="elementoHeader5">Fecha de Emision</div>
					<div name="complaint_priority" 	class="elementoHeader5">Prioridad</div>
					<div name="complaint_status"	class="elementoHeader5">Estado</div>
				</div>
				<?php foreach($complaints as $complaint): ?>
				<div class="fila">
					<div class="elemento5"><?= $complaint->name ?></div>
					<div class="elemento5"><?= $complaint->owner->name ?></div>
					<div class="elemento5"><?= $complaint->emission_date ?></div>
					<div class="elemento5">
						<?php
							switch ($complaint->priority) 
							{
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
					<div class="elemento5"> 
						<select name="estado" <?= 'id='.$complaint->id ?> <?php if($complaint->status == 2){ echo 'disabled'; } ?>>
							<option value=0 <?php if($complaint->status == 0){ echo 'selected'; } ?>> Por comenzar	</option>
							<option value=1 <?php if($complaint->status == 1){ echo 'selected'; } ?>> En Progreso	</option>
							<option value=2 <?php if($complaint->status == 2){ echo 'selected'; } ?>> Finalizado	</option>
						</select>
					</div>
				</div>
				<?php endforeach; ?>
			</div>			
		</div>
		<?= $this->Form->end(); ?>
	</section>
</div>

<script type="text/javascript">
	$("select[name='estado']").on('focusin', function(){
	    $(this).data('val', this.value);
	});

	
    $("select[name='estado']").on('change', function(){
    	prev = $(this).data('val');
    	id_elemento = this.id;
    	if(prev == 0 && this.value == 2)
    	{
    		alert('Aún no se ha comenzado a trabajar en el reclamo.');
    		$(this).data('val', prev);
    		this.value = prev;
    	}
    	else if(this.value == 0)
    	{
    		alert('El reclamo se está trabajando');
    		this.value = prev;
    		$(this).data('val', prev);
    	}
    	else if(this.value == 1)
    	{
    		pop_up = confirm('Desea comenzar a trabajar en el reclamo?');
    		if(pop_up == true)
    		{
    			$('<input />').attr('type', 'hidden')
			        .attr('name', "id")
			        .attr('value', id_elemento)
			        .appendTo('#formulario');
			    $('<input />').attr('type', 'hidden')
			        .attr('name', "cambio")
			        .attr('value', 1)
			        .appendTo('#formulario');
    			$("#formulario").submit();
    		}
    		else
    		{
    			this.value = prev;
    			$(this).data('val', prev);
    		}
    	}
    	else if(this.value == 2)
    	{
    		pop_up = confirm('Desea finalizar la atención del reclamo?\nUna vez terminada la atención no se puede seguir trabajando en el reclamo.');
    		if(pop_up == true)
    		{
    			$('<input />').attr('type', 'hidden')
			        .attr('name', "id")
			        .attr('value', id_elemento)
			        .appendTo('#formulario');
			    $('<input />').attr('type', 'hidden')
			        .attr('name', "cambio")
			        .attr('value', 2)
			        .appendTo('#formulario');
    			$("#formulario").submit();
    		}
    		else
    		{
    			this.value = prev;
    			$(this).data('val', prev);
    		}
    	}
    });
</script>
