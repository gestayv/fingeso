<!-- File: src/Template/Users/login.ctp -->
<?php $this->layout = 'fundamenta_login'; ?>

	<title>Home</title>
	
	<br>
	<br>

	<div class="container">
	<?php
		echo $this->Form->create(NULL, ['class' => 'form-horizontal']);
	?>
			<!-- Nombre del usuario -->
			<div class="form-group">
				<label for="user" class="control-label col-md-2">Usuario</label>
				<div class="col-md-10">
    				<input type="text" name="username" id="user" class="form-control" placeholder="Ingrese su usuario">
				</div>
			</div>

			<!-- Pass -->
			<div class="form-group">
				<label for="pw" class="control-label col-md-2">Password</label>
				<div class="col-md-10">
					<input type="password" name="password" id="pw" class="form-control" placeholder="Ingrese su password">
				</div>
			</div>

			<!-- Combobox: Tipo de usuario-->
			<div class="form-group">
				<label for="tipoU" class="control-label col-md-2">Tipo de Usuario:</label>
				<div class="col-md-10 combobox">
					<select name="tipoUser" class="form-control" id="tipoU">
						<option value="1">Propietario</option>
						<option value="2">Ejecutor</option>
						<option value="3">Supervisor</option>
						<option value="4">Administrador</option>						
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