
<?php
class Conexion{

public static function conectar(){
	try{
		$cn = new PDO("mysql:host=localhost;dbname=USA","root","root");
		//echo 'conectado';
		return $cn;
	}
	catch(PDOException $e){
		die($e->getMessage());
	}
} 	
	
}
 
