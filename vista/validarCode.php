<?php

include '../controlador/UsuarioControlador.php';
include '../helps/helps.php';

session_start();
header("Content-type: application/json");


$resultado = array();

if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	if(isset($_POST["cedula"]) &&  isset($_POST["clave"])){
		
		$txtCedula = validar_campo($_POST["cedula"]);
		$txtClave =  validar_campo($_POST["clave"]);
		
		$resultado = array("estado"=>"true");
		
		if(UsuarioControlador::login($txtCedula,$txtClave)){
			
			$usuario = UsuarioControlador::obtenerUsuario($txtCedula,$txtClave);
			
			$_SESSION["usuario"] = array(
				"cedula" => $usuario->getCedula(),
				"nombre" => $usuario->getNombre(),
				"apellidos" => $usuario->getApellidos(),
				"clave" => $usuario->getClave(),
				"edad" => $usuario->getEdad(),
				"rol" => $usuario->getRol() 
			);
			
			return print(json_encode($resultado));	
		}
	}	
	
}
$resultado = array("estado"=>"false");
return print(json_encode($resultado));	
