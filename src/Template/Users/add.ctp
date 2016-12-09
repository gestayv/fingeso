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
						<input type="text" name="name" id="nombre" class="form-control" placeholder="Nombre">
					</div>
				</div>
				<div class="form-group">
					<label for="apellido" class="control-label col-md-2">Apellido</label>
					<div class="col-md-10">
						<input type="text" name="surname" id="apellido" class="form-control" placeholder="Apellido">
					</div>
				</div>
				<div class="form-group">
					<label for="rut" class="control-label col-md-2">Rut</label>
					<div class="col-md-10">
						<input type="text" name="rut" id="rut" class="form-control" placeholder="12345678-9">
					</div>
				</div>
				<div class="form-group">
					<label for="tipoU" class="control-label col-md-2">Tipo de Usuario</label>
					<div class="col-md-10 combobox">
						<select name="tipoUser" class="form-control" id="tipoU">
							<option value=0>Rol</option>
							<option value=1>Propietario</option>
							<option value=2>Ejecutor</option>
							<option value=3>Supervisor</option>
							<option value=4>Administrador</option>
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
									echo '<option value='.$building->id.'>'.$building->name.'</option>';
								}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="dpto" class="control-label col-md-2">Departamento</label>
					<div class="col-md-10">
						<input type="text" id="dpto" class="form-control" placeholder="Departamento (Numero):" disabled="">
					</div>
				</div>
				<div class="form-group">
					<?= $this->Html->link('Atras', ['controller' => 'administrators', 'action' => 'index'], ['class' => 'btn btn-primary pull-left', 'style' => 'background:black']);
					?>
					<?php	
						/*$this->Html->link('Ingresar', ['controller' => 'users', 'action' => 'add'],['class' => 'btn btn-primary pull-right', 'onclick' =>'submitForm2()', 'style' => 'background:black']);*/
					?>
					<button class="btn btn-primary pull-right" style="background:black;" onclick="submitForm2()">Ingresar</button>>
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
	    return false;
	}
</script>
<script>
	function submitForm2() 
	{
	    document.getElementById("tipoSubmit").value = 'Datos'
	    document.getElementById('formulario').submit();
	}
</script>