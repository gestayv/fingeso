<!-- src/Template/Users/edit.ctp -->

	<?php $this->layout = "fundamenta"; ?>		
	<title>Modificar Usuario</title>
	<div class="container">
		
		<section class="main-row">
			<!-- Formulario -->
			<form action="" class="form-horizontal">
				<div class="form-group">
					<label for="nombre" class="control-label col-md-2">Nombre:</label>
					<div class="col-md-10">
						<input type="text" id="nombre" class="form-control" placeholder="Nombre:">
					</div>
				</div>
				<div class="form-group">
					<label for="apellido" class="control-label col-md-2">Apellido:</label>
					<div class="col-md-10">
						<input type="text" id="apellido" class="form-control" placeholder="Apellido:">
					</div>
				</div>
				<div class="form-group">
					<label for="rut" class="control-label col-md-2">Rut:</label>
					<div class="col-md-10">
						<input type="text" id="rut" class="form-control" placeholder="Rut:">
					</div>
				</div>
				<div class="form-group">
					<label for="tipoU" class="control-label col-md-2">Tipo de Usuario:</label>
					<div class="col-md-10 combobox">
						<select name="" class="form-control" id="tipoU">
							<option value="1">Propietario</option>
							<option value="2">Ejecutor</option>
							<option value="3">Supervisor</option>
							<option value="4">Administrador</option>						
						</select>
					</div>
				</div>
				<!--Elementos que dependen del tipo de usuario: Si es Propietario se habilitan -->
				<div class="form-group">
					<label for="proyecto" class="control-label col-md-2">Edificio/Proyecto:</label>
					<div class="col-md-10 combobox">
						<select name="" class="form-control" id="proyecto" disabled="">
				
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="dpto" class="control-label col-md-2">Departamento:</label>
					<div class="col-md-10">
						<input type="text" id="dpto" class="form-control" placeholder="Departamento (Numero):" disabled="">
					</div>
				</div>
				<div class="form-group">
					<!--
					<button class="btn btn-primary pull-left" style="background:black;">Atras</button>
					-->
					<?= $this->Html->link('Atras', ['controller' => 'administrators', 'action' => 'index'], ['class' => 'btn btn-primary pull-left', 'style' => 'background:black;']); ?>
					<button class="btn btn-primary pull-right" style="background:black;">Enviar</button>
				</div>
			</form>	
			
		</section>
	</div>