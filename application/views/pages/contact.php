<div id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<div class="contact-form">
					<h3>Formulario de contacto</h3>
					<p class="help-block">
						Si necesitas obtener informacion o realizar cualquier consulta puedes hacerla mediante este formulario se te hara llegar un mensaje a tu correo con la respuesta.
					</p>
					<form action="<?=base_url('')?>" method="post" class="">
						<div class="form-group">
							<label>Nombre completo</label>
							<input type="text" class="form-control" name="nombre">
						</div>
						<div class="form-group">
							<label>Tu correo</label>
							<input type="email" class="form-control" name="correo">
						</div>
						<div class="form-group">
							<label>Asunto</label>
							<input type="text" class="form-control" name="asunto">
						</div>
						<div class="form-group">
							<label>Mensaje</label>
							<textarea name="mensaje" rows="5" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="Enviar mensaje">
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-6">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7801.463701306015!2d-86.27469029460792!3d12.130490633502907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f7155e45947c2c5%3A0x8eaf963e036e7444!2sUniversidad+Nacional+de+Ingenier%C3%ADa!5e0!3m2!1ses!2sni!4v1467756924971" width="100%" height="350px" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<h3>Información de contacto</h3>
			</div>
		</div>
	</div>
</div>