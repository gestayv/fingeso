<!-- src/Template/Users/add.ctp -->



	<?php $this->layout = "fundamenta"; ?>
	<title>Modificar Usuario</title>
	<div class="container">
		
		<section class="main-row">
			<!-- Formulario -->
			<?= $this->Form->create(NULL, ['class' => 'form-horizontal', 'id' => 'formulario']); ?>

				<div class="form-group">
					<label for="nombre" class="control-label col-md-2">Nombre</label>
					<div class="col-md-10">
						<input type="hidden" name="tipoSubmit" id="tipoSubmit" class="form-control" value="Datos">
						<input 
							maxlength="50"
							type="text" 
							name="name" 
							id="nombre" 
							class="form-control" 
							placeholder="Nombre" 
							<?php if((isset($formData))) echo 'value="',$formData['name'],'"';?> 
							required >
					</div>
				</div>
				<div class="form-group">
					<label for="apellido" class="control-label col-md-2">Apellido</label>
					<div class="col-md-10">
						<input 
							maxlength="50"
							type="text" 
							name="surname" 
							id="apellido" 
							class="form-control" 
							placeholder="Apellido" 
							<?php if((isset($formData))) echo 'value="',$formData['surname'],'"';?>
							required >
					</div>
				</div>
				<div class="form-group">
					<label for="rut" class="control-label col-md-2">Rut</label>
					<div class="col-md-10">
						<input 
							maxlength="12"
							type="text" 
							name="rut" 
							id="rut" 
							class="form-control" 
							placeholder="12345678-9" 
							pattern="([0-9])+-[0-9]"
							<?php if((isset($formData))) echo 'value="',$formData['rut'],'"';?> 
							required >
					</div>
				</div>
				<div class="form-group">
					<label for="tipoU" class="control-label col-md-2">Tipo de Usuario</label>
					<div class="col-md-10 combobox">
						<select name="tipoUser" class="form-control" id="tipoU" required>
							<option value='' <?=(isset($formData)&&$formData['tipoUser']==0)?'selected':'';?> >Rol</option>
							<option value=1 <?=(isset($formData)&&$formData['tipoUser']==1)?'selected':'';?> >Propietario</option>
							<option value=2 <?=(isset($formData)&&$formData['tipoUser']==2)?'selected':'';?> >Ejecutor</option>
							<option value=3 <?=(isset($formData)&&$formData['tipoUser']==3)?'selected':'';?> >Supervisor</option>
							<option value=4 <?=(isset($formData)&&$formData['tipoUser']==4)?'selected':'';?> >Administrador</option>
						</select>
					</div>
				</div>
				<!--Elementos que dependen del tipo de usuario: Si es Propietario se habilitan -->
				<div class="form-group">
					<label for="proyecto" class="control-label col-md-2">Edificio/Proyecto</label>
					<div class="col-md-10 combobox">
						<select onchange="submitForm1()" name='edificio' class="form-control" id="proyecto">
							<?php
								echo '<option value =0>Seleccione un edificio</option>';
								foreach ($buildings as $building) {
									echo '<option value='.$building->id;
									echo (isset($formData)&&$formData['edificio']==$building->id)?' selected':'';
									echo '>'.$building->name.'</option>';
								}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="dpto" class="control-label col-md-2">Departamento</label>
					<div class="col-md-10 combobox">
						<select name='departamento' class="form-control" id="dpto" <?php echo (isset($apartments)) ? '': 'disabled' ;?> >
							<?php
								echo '<option value =0>Seleccione un departamento</option>';
								foreach ($apartments as $apart) {
									echo '<option value='.$apart->id.'>'.$apart->num.'</option>';
								}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<?= $this->Html->link('Atras', ['controller' => 'administrators', 'action' => 'index'], ['class' => 'btn btn-primary pull-left', 'style' => 'background:black']);
					?>
					<input type="submit" value="Enviar" class="btn btn-primary pull-right" style="background:black;">
					<?=
						$this->Form->end();
					?>
				</div>
		</section>
	</div>

<script >
	function submitForm1() 
	{
	    document.getElementById("tipoSubmit").value = 'Edificio';
	    document.getElementById('formulario').submit();
	}
	
	function submitForm2() 
	{
	    document.getElementById("tipoSubmit").value = 'Datos';
	    document.getElementById('formulario').submit();
	}

	window.onload = function()
	{
		var x = document.getElementById("tipoU").value;
		if(x == 1)
		{
			document.getElementById("proyecto").disabled = false;
			document.getElementById("dpto").disabled = false;
		}
		else if(x == 3)
		{
			document.getElementById("proyecto").disabled = true;
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
		else if(tipo == 3)
		{
			document.getElementById("proyecto").disabled = false;
			document.getElementById("dpto").value = 0;
			document.getElementById("dpto").disabled = true;
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