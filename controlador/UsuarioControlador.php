<?php
include '../datos/UsuarioDao.php';

class UsuarioControlador{
	
	public static function login($cedula,$clave){
		
		$obj_usuario = new Usuario();

		$obj_usuario->setCedula($cedula);
		$obj_usuario->setClave($clave);
		
		return UsuarioDao::login($obj_usuario);	
	}	
	
	public function obtenerUsuario($cedula,$clave){
		
		$obj_usuario = new Usuario();

		$obj_usuario->setCedula($cedula);
		$obj_usuario->setClave($clave);
		
		return UsuarioDao::obtenerUsuario($obj_usuario);
	}	

	public function registrar($cedula,$clave,$nombre,$apellidos,$edad,$rol){
		
		$obj_usuario = new Usuario();

		$obj_usuario->setCedula($cedula);
		$obj_usuario->setClave($clave);
		$obj_usuario->setNombre($nombre);
		$obj_usuario->setApellidos($apellidos);
		$obj_usuario->setEdad($edad);
		$obj_usuario->setRol($rol);
		
		return UsuarioDao::registrar($obj_usuario);
	}
}