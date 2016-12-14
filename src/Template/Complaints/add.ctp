<?php $this->layout = 'fundamenta'; ?>
		<div class="container">
	
		<div class="row">
			<?= $this->Form->create(NULL, ['class' => 'form-horizontal', 'id' => 'formulario']); ?>
				<div class="text-center" style="margin: 0px 400px">
					<h3>Titulo del Reclamo</h3>
					<input name="complaint_name" type="text" placeholder="Nombre del reclamo:" class="form-control" required>
				</div>

				<!-- Division en columnas -->
				<div class="row">
					<div class="col-md-1">
						
					</div>
					<!-- Primera columna-->
					<div class="col-md-4 col-xs-10">
						<label for="" class="control-label">Disponibilidad</label>
						<div class="">
							<input name="Lunes" id="l" type="checkbox" class="text-center"> Lunes
							<div class="row" id="b_l" style="display:none">
									<div class="col-md-6">
										<input value="1" name="l1" type="checkbox">8:00 - 10:00 <br>
										<input value="2" name="l2" type="checkbox">10:00 - 12:00 <br> 
										<input value="3" name="l3" type="checkbox">14:00 - 16:00 <br>
									</div>
									<div class="col-md-6">
										<input value="4" name="l4" type="checkbox">16:00 - 18:00 <br>
										<input value="5" name="l5" type="checkbox">18:00 - 20:00 <br>
										<input value="6" name="l6" type="checkbox">20:00 - 22:00 <br>
									</div>
							</div>
						</div>

						<div class="">
							<input name="Martes" id="m" type="checkbox" class="text-center"> Martes
							<div class="row" id="b_m" style="display:none">
									<div class="col-md-6">
										<input value="1" name="m1" type="checkbox">8:00 - 10:00 <br>
										<input value="2" name="m2" type="checkbox">10:00 - 12:00 <br> 
										<input value="3" name="m3" type="checkbox">14:00 - 16:00 <br>
									</div>
									<div class="col-md-6">
										<input value="4" name="m4" type="checkbox">16:00 - 18:00 <br>
										<input value="5" name="m5" type="checkbox">18:00 - 20:00 <br>
										<input value="6" name="m6" type="checkbox">20:00 - 22:00 <br>
									</div>
							</div>
						</div>

						<div class="">
							<input name="Miercoles" id="w" type="checkbox" class="text-center"> Miercoles
							<div class="row" id="b_w" style="display:none">
									<div class="col-md-6">
										<input value="1" name="w1" type="checkbox">8:00 - 10:00 <br>
										<input value="2" name="w2" type="checkbox">10:00 - 12:00 <br> 
										<input value="3" name="w3" type="checkbox">14:00 - 16:00 <br>
									</div>
									<div class="col-md-6">
										<input value="4" name="w4" type="checkbox">16:00 - 18:00 <br>
										<input value="5" name="w5" type="checkbox">18:00 - 20:00 <br>
										<input value="6" name="w6" type="checkbox">20:00 - 22:00 <br>
									</div>
							</div>
						</div>

						<div class="">
							<input name="Jueves" id="j" type="checkbox" class="text-center"> Jueves
							<div class="row" id="b_j" style="display:none">
									<div class="col-md-6">
										<input value="1" name="j1" type="checkbox">8:00 - 10:00 <br>
										<input value="2" name="j2" type="checkbox">10:00 - 12:00 <br> 
										<input value="3" name="j3" type="checkbox">14:00 - 16:00 <br>
									</div>
									<div class="col-md-6">
										<input value="4" name="j4" type="checkbox">16:00 - 18:00 <br>
										<input value="5" name="j5" type="checkbox">18:00 - 20:00 <br>
										<input value="6" name="j6" type="checkbox">20:00 - 22:00 <br>
									</div>
							</div>
						</div>

						<div class="">
							<input name="Viernes" id="v" type="checkbox" class="text-center"> Viernes
							<div class="row" id="b_v" style="display:none">
									<div class="col-md-6">
										<input value="1" name="v1" type="checkbox">8:00 - 10:00 <br>
										<input value="2" name="v2" type="checkbox">10:00 - 12:00 <br> 
										<input value="3" name="v3" type="checkbox">14:00 - 16:00 <br>
									</div>
									<div class="col-md-6">
										<input value="4" name="v4" type="checkbox">16:00 - 18:00 <br>
										<input value="5" name="v5" type="checkbox">18:00 - 20:00 <br>
										<input value="6" name="v6" type="checkbox">20:00 - 22:00 <br>
									</div>
							</div>
						</div>

						<div class="">
							<input name="Sabado" id="s" type="checkbox" class="text-center"> Sabado
							<div class="row" id="b_s" style="display:none">
									<div class="col-md-6">
										<input value="1" name="s1" type="checkbox">8:00 - 10:00 <br>
										<input value="2" name="s2" type="checkbox">10:00 - 12:00 <br> 
										<input value="3" name="s3" type="checkbox">14:00 - 16:00 <br>
									</div>
									<div class="col-md-6">
										<input value="4" name="s4" type="checkbox">16:00 - 18:00 <br>
										<input value="5" name="s5" type="checkbox">18:00 - 20:00 <br>
										<input value="6" name="s6" type="checkbox">20:00 - 22:00 <br>
									</div>
							</div>
						</div>

						<div class="">
							<input name="Domingo" id="d" type="checkbox" class="text-center"> Domingo
							<div class="row" id="b_d" style="display:none">
									<div class="col-md-6">
										<input value="1" name="d1" type="checkbox">8:00 - 10:00 <br>
										<input value="2" name="d2" type="checkbox">10:00 - 12:00 <br> 
										<input value="3" name="d3" type="checkbox">14:00 - 16:00 <br>
									</div>
									<div class="col-md-6">
										<input value="4" name="d4" type="checkbox">16:00 - 18:00 <br>
										<input value="5" name="d5" type="checkbox">18:00 - 20:00 <br>
										<input value="6" name="d6" type="checkbox">20:00 - 22:00 <br>
									</div>
							</div>
						</div>						
					</div>
					<div class="col-md-2">
						
					</div>
					<!-- Segunda columna-->
					<div class="col-md-4 col-xs-12" style="">
						<!--TextArea: Para la descripcion -->
						<label for="">Descripcion del reclamos</label>
						<textarea  class="form-control" name="descripcion" id="descripcion" cols="30" rows="10" style="resize:none" placeholder="Escriba en detalle en qué consiste su reclamo" required></textarea>
					</div>
					<div class="col-md-1">
					</div>
				</div>
		</div>
		<div class="row">
			<button class="btn btn-primary pull-right" type="submit" style="background-color:black">Enviar</button>
			<a href="/Owners/index" class="btn btn-primary pull-left" style="background-color:black">Volver</a>
		</div>
		<?= $this->Form->end(); ?>
	</div>

<script>
	window.onload =function()
	{
		var lun = document.getElementById('l');
		var mar = document.getElementById('m');
		var mie = document.getElementById('w');
		var jue = document.getElementById('j');
		var vie = document.getElementById('v');
		var sab = document.getElementById('s');
		var dom = document.getElementById('d');
		
		lun.onclick = cambioL;
		mar.onclick = cambioM;
		mie.onclick = cambioW;
		jue.onclick = cambioJ;
		vie.onclick = cambioV;
		sab.onclick = cambioS;
		dom.onclick = cambioD;
	}

	function cambioL()
	{
		if(document.getElementById('l').checked == true)
		{
			document.getElementById('b_l').style.display = 'initial';	
		}
		else if(document.getElementById('l').checked == false)
		{
			document.getElementById('b_l').style.display = 'none';
		}
	}

	function cambioM()
	{
		if(document.getElementById('m').checked == true)
		{
			document.getElementById('b_m').style.display = 'initial';	
		}
		else if(document.getElementById('m').checked == false)
		{
			document.getElementById('b_m').style.display = 'none';
		}
	}

	function cambioW()
	{
		if(document.getElementById('w').checked == true)
		{
			document.getElementById('b_w').style.display = 'initial';	
		}
		else if(document.getElementById('w').checked == false)
		{
			document.getElementById('b_w').style.display = 'none';
		}
	}

	function cambioJ()
	{
		if(document.getElementById('j').checked == true)
		{
			document.getElementById('b_j').style.display = 'initial';	
		}
		else if(document.getElementById('j').checked == false)
		{
			document.getElementById('b_j').style.display = 'none';
		}
	}

	function cambioV()
	{
		if(document.getElementById('v').checked == true)
		{
			document.getElementById('b_v').style.display = 'initial';	
		}
		else if(document.getElementById('v').checked == false)
		{
			document.getElementById('b_v').style.display = 'none';
		}
	}

	function cambioS()
	{
		if(document.getElementById('s').checked == true)
		{
			document.getElementById('b_s').style.display = 'initial';	
		}
		else if(document.getElementById('s').checked == false)
		{
			document.getElementById('b_s').style.display = 'none';
		}
	}

	function cambioD()
	{
		if(document.getElementById('d').checked == true)
		{
			document.getElementById('b_d').style.display = 'initial';	
		}
		else if(document.getElementById('d').checked == false)
		{
			document.getElementById('b_l').style.display = 'none';
		}
	}
</script>