<div class="container">
	<div class="row">
		<div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
			<div class="login">
				<h3 class="text-center">Inicia sesión</h3>
				<hr>
				<form action="<?=base_url('index.php/page')?>" method="post">
					<div class="form-group">
						<label>Correo</label>
						<input type="text" class="form-control input-sm" name="correo" placeholder="correo">
					</div>
					<div class="form-group">
						<label>Contraseña</label>
						<input type="text" class="form-control input-sm" name="contraseña" placeholder="contraseña">
					</div>
					<div class="form-group" style="overflow: auto;">
						<button type="submit" class="btn btn-sm btn-primary pull-right">Acceder</button>
					</div>
				</form>	
				<hr>
				<a href="<?=base_url('')?>">Olvidé mi contraseña</a>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function un_mensaje(){
		var data = {
			title: "ejemplo",
			message: "un mensaje"
		};

		showMessage(data);
	}
</script>