
<?php include 'partials/head.php'; ?>
<?php include 'partials/menu.php'; ?>


<div class = "container">
	<br>
		<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(../images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				<form id = "loginForm" action ="validarCode.php" method = "POST" role = "form" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Cedula</span>
						<input class="input100" type="text" id = "txt_cedula" name="cedula" autofocus placeholder="Digite Cedula" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Clave</span>
						<input class="input100" type="password" name="clave" id = "txt_clave" placeholder="Digite Clave" required>
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button type = "submit" class="login100-form-btn" id = "btn_login">
							Ingresar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</div>

<?php include 'partials/footer.php'; ?>

<script>

$("#loginForm").bind("submit",function(){
	
	$.ajax({
		
		type:$(this).attr("method"),
		url: $(this).attr("action"),
		data:$(this).serialize(),
		beforeSend: function(){
			$("#loginForm button[type=submit]").html("Conectando");	
			$("#loginForm button[type=submit]").attr("disabled","disabled");	
		},
		success: function(response){
			if(response.estado == "true"){
				$("body").overhang({
					  type: "success",
					  message: "Usuario encontrado, te estamos redirigiendo",
					  callback:function(){
					  	window.location.href = "admin.php",true;	
					  }
					});
			}else{
				$("body").overhang({
				  type: "error",
				  message: "Cedula o clave incorrecta"
				});
			}
			
			$("#loginForm button[type=submit]").html("Ingresar");
			$("#loginForm button[type=submit]").removeAttr("disabled","disabled");	
		},
		error: function(){
			$("body").overhang({
			  type: "error",
			  message: "Opps Ha surgido algun error en la conexion"
			});
			
			
			$("#loginForm button[type=submit]").html("Ingresar");
			$("#loginForm button[type=submit]").removeAttr("disabled","disabled");		
		} 	
	});
	
	return false;
	});
				
    </script>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	