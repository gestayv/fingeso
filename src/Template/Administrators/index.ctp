<?php $this->layout='fundamenta'?>
	<!--Rectangulo de Reclamos-->
	<title>Menu principal: Administrador</title>
	<div class="content" >
		
		<section class="main-row">
			<!--Buscador -->
			<div class="col-md-offset-1 col-md-2">
				<label for="" class="">Buscador de texto</label>
				<div class="form-group">
					<input type="text" class="buscador" placeholder="Nombre de usuario">
					<input type="text" class="buscador" placeholder="Rut">
					<input type="text" class="buscador" placeholder="Tipo de usuario">
			    </div>
			    <div class="form-group text-center">
			    	<button class="btn btn-primary text-center">Buscar</button>
			    </div>

			    <div class="row text-center" style="margin-top:10px">
						<button onclick="location.href='/users/add'" class="btn btn-primary" style="background:black" >Agregar Usuario</button>
				</div>
			</div>
			<!--Rectangulo de Reclamos-->

			<div class="col-md-8"">
				<div class="tabla">
					<div class="filaHeader">
						<div class="elementoHeader5">Nombre</div>
						<div class="elementoHeader5">Apellido</div>
						<div class="elementoHeader5">Rut</div>
						<div class="elementoHeader5">Tipo de Usuario</div>
						<div class="elementoHeader5">Seleccion</div>
					</div>
				</div>
				<div class="tabla" style="overflow: scroll;">
					
					<div class="fila">
					<?php foreach ($admins as $admin): ?>
						    <div class="elemento5">
						    	<?php echo $admin->name; ?>
						    </div>
						    <div class="elemento5">
						    	<?php echo $admin->surname; ?>
						    </div>
						    <div class="elemento5">
						    	<?php echo $admin->rut; ?>
						    </div>
						    <div class="elemento5">
						    	<?php echo 'Administrador'; ?>
						    </div>
						    <div class="elemento5">	
							<div class="elementbutton">
								<button class="btn btn-info " style="padding: 1px 10px;">Modificar</button>
							</div>
							<div class="elementbutton">
								<button class="btn btn-danger" style="padding: 1px 10px;">X</button>
							</div>
						</div>
					<?php endforeach; ?>
					</div>
					<div class="fila">
					<?php foreach ($owners as $owner): ?>
						    <div class="elemento5">
						    	<?php echo $owner->name; ?>
						    </div>
						    <div class="elemento5">
						    	<?php echo $owner->surname; ?>
						    </div>
						    <div class="elemento5">
						    	<?php echo $owner->rut; ?>
						    </div>
						    <div class="elemento5">
						    	<?php echo 'Propietario'; ?>
						    </div>
						    <div class="elemento5">	
							<div class="elementbutton">
								<button class="btn btn-info " style="padding: 1px 10px;">Modificar</button>
							</div>
							<div class="elementbutton">
								<button class="btn btn-danger" style="padding: 1px 10px;">X</button>
							</div>
						</div>
					<?php endforeach; ?>
					</div>
					<div class="fila">
					<?php foreach ($execs as $exec): ?>
						    <div class="elemento5">
						    	<?php echo $exec->name; ?>
						    </div>
						    <div class="elemento5">
						    	<?php echo $exec->surname; ?>
						    </div>
						    <div class="elemento5">
						    	<?php echo $exec->rut; ?>
						    </div>
						    <div class="elemento5">
						    	<?php echo 'Ejecutor'; ?>
						    </div>
						    <div class="elemento5">	
							<div class="elementbutton">
								<button class="btn btn-info " style="padding: 1px 10px;">Modificar</button>
							</div>
							<div class="elementbutton">
								<button class="btn btn-danger" style="padding: 1px 10px;">X</button>
							</div>
						</div>
					<?php endforeach; ?>
					</div>
					<div class="fila">
					<?php foreach ($supers as $super): ?>
						    <div class="elemento5">
						    	<?php echo $super->name; ?>
						    </div>
						    <div class="elemento5">
						    	<?php echo $super->surname; ?>
						    </div>
						    <div class="elemento5">
						    	<?php echo $super->rut; ?>
						    </div>
						    <div class="elemento5">
						    	<?php echo 'Supervisor'; ?>
						    </div>
						    <div class="elemento5">	
							<div class="elementbutton">
								<button class="btn btn-info " style="padding: 1px 10px;">Modificar</button>
							</div>
							<div class="elementbutton">
								<button class="btn btn-danger" style="padding: 1px 10px;">X</button>
							</div>
						</div>
					<?php endforeach; ?>
					</div>	
				</div>
			</div>
		</section>
	</div>	