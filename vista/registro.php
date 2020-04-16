
<?php include 'partials/head.php'; ?>
<?php include 'partials/menu.php'; ?>


<div class = "container">
	<br>
		<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(../images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Registro de usuarios
					</span>
				</div>

				<form  action ="registroCode.php" method = "POST" role = "form" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Cedula</span>
						<input class="input100" type="text" id = "txt_cedula" name="cedula" autofocus placeholder="Digite Cedula" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Nombres</span>
						<input class="input100" type="text" id = "txt_nombre" name="nombre"  placeholder="Digite nombre" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Apellidos</span>
						<input class="input100" type="text" name="apellidos" id = "txt_apellidos" placeholder="Digite Apellidos" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Edad</span>
						<input class="input100" type="number" name="edad" id = "txt_edad" placeholder="Digite Edad" required>
						<span class="focus-input100"></span>
					</div>				

					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">clave</span>
						<input class="input100" type="password" name="clave" id = "txt_clave" placeholder="********" required>
						<span class="focus-input100"></span>
					</div>

			

					<div class="container-login100-form-btn">
						<button type = "submit" class="login100-form-btn">
							Registrar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</div>

<?php include 'partials/footer.php'; ?>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	