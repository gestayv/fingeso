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
					<input type="hidden" name="tipoSubmit" id="tipoSubmit" class="form-control" value="default">
						<input type="text" name="name" id="nombre" class="form-control" placeholder="Nombre" <?php if((isset($formData))) echo 'value="',$formData['name'],'"';?> >
					</div>
				</div>
				<div class="form-group">
					<label for="apellido" class="control-label col-md-2">Apellido</label>
					<div class="col-md-10">
						<input type="text" name="surname" id="apellido" class="form-control" placeholder="Apellido" <?php if((isset($formData))) echo 'value="',$formData['surname'],'"';?>>
					</div>
				</div>
				<div class="form-group">
					<label for="rut" class="control-label col-md-2">Rut</label>
					<div class="col-md-10">
						<input type="text" name="rut" id="rut" class="form-control" placeholder="12345678-9" <?php if((isset($formData))) echo 'value="',$formData['rut'],'"';?>>
					</div>
				</div>
				<div class="form-group">
					<label for="tipoU" class="control-label col-md-2">Tipo de Usuario</label>
					<div class="col-md-10 combobox">
						<select name="tipoUser" class="form-control" id="tipoU">
							<option value=0 <?=(isset($formData)&&$formData['tipoUser']==0)?'selected':'';?> >Rol</option>
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
					<?php	
						/*$this->Html->link('Ingresar', ['controller' => 'users', 'action' => 'add'],['class' => 'btn btn-primary pull-right', 'onclick' =>'submitForm2()', 'style' => 'background:black']);*/
					?>
					<button class="btn btn-primary pull-right" style="background:black;" onclick="submitForm2()">Ingresar</button>
					<?=
						$this->Form->end();
					?>
				</div>
		</section>
	</div>

<script >
	function submitForm1() 
	{
	    document.getElementById("tipoSubmit").value = 'Edificio'
	    document.getElementById('formulario').submit();
	}
</script>
<script>
	function submitForm2() 
	{
	    document.getElementById("tipoSubmit").value = 'Datos'
	    document.getElementById('formulario').submit();
	}
</script>