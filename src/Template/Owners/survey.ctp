<?php $this->layout = 'fundamenta'; ?>

<div class="container">
	<form action="" class="form-horizontal">
		<div class="form-group">
			<div class="container text-center">
			<!--Label. Dentro del texto iria algo como: Ingrese los comentarios sobre la atencion. etc, etc, etc -->
				<label for="" class="control-label">Ingrese :</label>

				<!--TextArea: Tiene el contenido del texto. En la vista de "Supervisor", deberia tener una elemento
				disabled="" -->
				<div class="container " >
					<textarea class="form-control" maxlength="300" style="width:90%;margin-left:50px;" rows="10" id="comment" placeholder=""></textarea>
				</div>

			</div>
		</div>	
		<div class="form-group">
			<a href="/owners/index" class="btn btn-primary pull-left">Atras</a>
			<button class="btn btn-primary pull-right">Enviar</button>
		</div>
	</form>
</div>