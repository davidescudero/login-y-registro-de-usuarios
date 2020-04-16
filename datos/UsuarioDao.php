<?php

include 'Conexion.php';
include '../entidades/Usuario.php';

class UsuarioDao extends Conexion{

	protected static $cnx;
	
	private static function getConexion(){
		self::$cnx = Conexion::conectar();	
	}
	
	private static function desconectar(){
		self::$cnx =null;	
	}			
	
	public static function login($usuario){
		
		$query = 'SELECT * FROM usuarios WHERE cedula = :cedula AND clave = :clave;';
		
		self::getConexion();
		
		
		$resultado = self::$cnx->prepare($query);
		$resultado->bindParam(':cedula',$usuario->getCedula());
		$resultado->bindParam(':clave',$usuario->getClave());
		
		$resultado->execute();
		
		if($resultado->rowCount() > 0){
			
			$filas = $resultado->fetch();
			
			if($filas['cedula'] == $usuario->getCedula() && $filas['clave'] == $usuario->getClave()){
				return true;
			}	
		}
		
		return false;
	}
	
	
	
		//metodo para obtener un usuario 
		public static function obtenerUsuario($usuario){
		
		$query = 'SELECT cedula,clave,nombre,apellidos,edad,rol FROM usuarios WHERE cedula = :cedula AND clave = :clave;';
		
		self::getConexion();
		
		
		$resultado = self::$cnx->prepare($query);
		$resultado->bindParam(':cedula',$usuario->getCedula());
		$resultado->bindParam(':clave',$usuario->getClave());
		
		$resultado->execute();
		
		$filas = $resultado->fetch();
		
		$usuario = new Usuario();
		
		$usuario->setCedula($filas["cedula"]);
		$usuario->setClave($filas["clave"]);
		$usuario->setNombre($filas["nombre"]);
		$usuario->setApellidos($filas["apellidos"]);
		$usuario->setEdad($filas["edad"]);
		$usuario->setRol($filas["rol"]);
		
		
		
		return $usuario;
	}



		public static function registrar($usuario){
		
		$query = "INSERT INTO usuarios(cedula,clave,nombre,apellidos,edad,rol) values(:cedula,:clave,:nombre,:apellidos,:edad,:rol);";

		self::getConexion();
		
		$resultado = self::$cnx->prepare($query);
		
		$resultado->bindParam(':cedula',$usuario->getCedula());
		$resultado->bindParam(':clave',$usuario->getClave());
		$resultado->bindParam(':nombre',$usuario->getNombre());
		$resultado->bindParam(':apellidos',$usuario->getApellidos());
		$resultado->bindParam(':edad',$usuario->getEdad());
		$resultado->bindParam(':rol',$usuario->getRol());


		if ($resultado->execute()) {
			return true;
		}


		return false;
	}
	
}
























