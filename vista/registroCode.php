<?php

include '../controlador/UsuarioControlador.php';
include '../helps/helps.php';

session_start();


if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	if(isset($_POST["cedula"]) &&  isset($_POST["clave"])   &&  isset($_POST["nombre"])   &&  isset($_POST["apellidos"])   &&  isset($_POST["edad"]) ){
		
		$txtCedula = validar_campo($_POST["cedula"]);
		$txtClave = validar_campo($_POST["clave"]);
		$txtNombre =  validar_campo($_POST["nombre"]);
		$txtApellidos =  validar_campo($_POST["apellidos"]);
		$txtEdad =  validar_campo($_POST["edad"]);
		$txtRol =  "1";
		
	
		print_r("expression");
		if(UsuarioControlador::registrar($txtCedula,$txtClave,$txtNombre,$txtApellidos,$txtEdad,$txtRol)){
			print_r("expression 2");
			$usuario = UsuarioControlador::obtenerUsuario($txtCedula,$txtClave);
			
			$_SESSION["usuario"] = array(
				"cedula" => $usuario->getCedula(),
				"nombre" => $usuario->getNombre(),
				"apellidos" => $usuario->getApellidos(),
				"clave" => $usuario->getClave(),
				"edad" => $usuario->getEdad(),
				"rol" => $usuario->getRol() 
			);
			
			header("location:admin.php");

		}
	}	
	
}else{


header("location:registro.php?error=1");
}