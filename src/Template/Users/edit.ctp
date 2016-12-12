<!-- src/Template/Users/edit.ctp -->

	<?php $this->layout = "fundamenta"; ?>		
	<title>Modificar Usuario</title>
	<div class="container">
		
		<section class="main-row">
			<!-- Formulario -->
			<form action="/users/edit/" class="form-horizontal">
				<div class="form-group">
					<label for="nombre" class="control-label col-md-2">Nombre:</label>
					<div class="col-md-10">
						<?php
							foreach ($user as $u) {}
							echo $this->Form->text('Nombre', ['class' => 'form-control', 'name' => 'user_name', 'type' => 'text', 'value' => $u->name]);
						?>
					</div>
				</div>	
				<div class="form-group">
					<label for="apellido" class="control-label col-md-2">Apellido:</label>
					<div class="col-md-10">
						<?php
							echo $this->Form->text('Apellido', ['class' => 'form-control', 'name' => 'user_surname', 'type' => 'text', 'value' => $u->surname]); 
						?>
					</div>
				</div>
				<div class="form-group">
					<label for="rut" class="control-label col-md-2">Rut:</label>
					<div class="col-md-10">
						<?php
							echo $this->Form->text('Rut', ['class' => 'form-control', 'name' => 'user_rut', 'type' => 'text', 'value' => $u->rut]); 
						?>
					</div>
				</div>
				<div class="form-group">
					<label for="tipoU" class="control-label col-md-2">Tipo de Usuario:</label>
					<div class="col-md-10 combobox">
						<select name="tipoU" class="form-control" id="tipoU">
							<option value = 0>Seleccione un rol	</option>
							<option value = 1 <?php if($tipo == 1){echo 'selected';} ?> >Propietario	</option>
							<option value = 2 <?php if($tipo == 2){echo 'selected';} ?> >Ejecutor		</option>
							<option value = 3 <?php if($tipo == 3){echo 'selected';} ?> >Supervisor		</option>
							<option value = 4 <?php if($tipo == 4){echo 'selected';} ?> >Administrador	</option>						
						</select>
					</div>
				</div>
				<!--Elementos que dependen del tipo de usuario: Si es Propietario se habilitan -->
				<div class="form-group">
					<label for="proyecto" class="control-label col-md-2">Edificio/Proyecto:</label>
					<div class="col-md-10 combobox">
						<select name="proyecto" class="form-control" id="proyecto">
							<option value = 0>Seleccione un Edificio</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="dpto" class="control-label col-md-2">Departamento:</label>
					<div class="col-md-10">
						<select type="text" name="dpto" id="dpto" class="form-control" placeholder="Departamento (Numero):">
							<option value = 0>Seleccione un departamento</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<!--
					<button class="btn btn-primary pull-left" style="background:black;">Atras</button>
					-->
					<?= $this->Html->link('Atras', ['controller' => 'administrators', 'action' => 'index'], ['class' => 'btn btn-primary pull-left', 'style' => 'background:black;']); ?>
					<button class='btn btn-primary pull-right' style="background:black;">Enviar</button>
				</div>
			</form>	
			
		</section>
	</div>

<script>
	window.onload = function()
	{
		var x = document.getElementById("tipoU").value;
		if(x == 1)
		{
			document.getElementById("proyecto").disabled = false;
			document.getElementById("dpto").disabled = false;
		}
		else
		{
			document.getElementById("proyecto").disabled = true;
			document.getElementById("dpto").disabled = true;	
		}
		document.getElementById("tipoU").onchange = filtroUser;
	}

	function filtroUser()
	{
		var tipo = document.getElementById("tipoU").value;
		if(tipo == 1)
		{
			document.getElementById("proyecto").disabled = false;
			document.getElementById("dpto").disabled = false;
		}
		else
		{
			document.getElementById("proyecto").disabled = true;
			document.getElementById("dpto").disabled = true;
			document.getElementById("proyecto").value = 0;
			document.getElementById("dpto").value = 0;
		}
	}
</script>