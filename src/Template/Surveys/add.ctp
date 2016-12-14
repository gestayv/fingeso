
<?php $this->layout = 'fundamenta'; ?>

<div class="container">
	<form action="" class="form-horizontal">
		<div class="form-group">
			<div class="container text-center">


			<?= $this->Form->create(NULL, ['class' => 'form-horizontal', 'id' => 'formulario']); ?>

			<div class="row">
				<div class="col-md-5">
					<label for="" class="control-label">Nombre del reclamo:</label>
					<!--Aqui va el nombre del reclamo desde el departamento -->
						<?php foreach ($surveys as $s);?>
					<p><?php echo $s->complaint->name; ?></p>

				</div>
				<div class="col-md-offset-2 col-md-5">
					<label for="" class="control-label">Nombre de ejecutor:</label>
					<!--Aqui va el nombre del ejcutor asignado del reclamo-->
						<?php foreach ($exec as $e);?>
					<p><?php echo $e->name." ".$e->surname; ?></p>
	
				</div>
			</div>

			<!--Label. Dentro del texto iria algo como: Ingrese los comentarios sobre la atencion. etc, etc, etc -->
				<div class="row">
					<label for="" class="control-label">Ingrese su comentarios:</label>
					
					<!--TextArea: Tiene el contenido del texto. En la vista de "Supervisor", deberia tener una elemento
					disabled="" -->
					<div class="container " >
						<textarea class="form-control" style="width:90%;margin-left:50px;" rows="10" id="comment" placeholder=""></textarea>
					</div>
				</div>

			</div>
		</div>	
		<div class="form-group">
			<a href="/owners/index" class="btn btn-primary pull-left">Atras</a>
			<button class="btn btn-primary pull-right">Enviar</button>
			<?= $this->Form->end(); ?>
		</div>
	</form>
</div>