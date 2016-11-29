<!-- File: src/Template/Users/login.ctp -->
<?php $this->layout = 'fundamenta_login'; ?>

	<title>Home</title>
	
	<br>
	<br>

	<div class="container">
		<form action="" class="form-horizontal">
			<!-- Nombre del usuario -->
			<div class="form-group">
				<label for="user" class="control-label col-md-2">Usuario</label>
				<div class="col-md-10">
    				<input type="text" id="user" class="form-control" placeholder="Ingrese su usuario:">
				</div>
			</div>

			<!-- Pass -->
			<div class="form-group">
				<label for="pw" class="control-label col-md-2">Password</label>
				<div class="col-md-10">
					<input type="password" id="pw" class="form-control" placeholder="Ingrese su password:">
				</div>
			</div>

			<!-- Combobox: Tipo de usuario-->
			<div class="form-group">
				<label for="tipoU" class="control-label col-md-2">Tipo de Usuario:</label>
				<div class="col-md-10 combobox">
					<select name="" class="form-control" id="tipoU">
						<option value="">Propietario</option>
						<option value="">Ejecutor</option>
						<option value="">Supervisor</option>
						<option value="">Administrador</option>						
					</select>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-2 col-md-offset-6">
					<?php
						echo $this->Form->button('Ingresar', ['type' => 'submit', 'class' => 'btn btn-primary']);
						echo $this->Form->end();
					?>
				</div>
			</div>
		</form>
	</div>

</body>
</html>