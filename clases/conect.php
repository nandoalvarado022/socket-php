<?php
/*
	Clase que conecta a base de datos "supervisión_personal" únicamente con fines de
	validar los datos de acceso de los usuarios.
	
	Ver 0.2                        24.09.2011
	
	NutricionSAS Derechos reservados 
*/


if( basename( $_SERVER['PHP_SELF'] )== "conect.php" )
exit;

class conect
{
	private $host;
	private $root;
	private $pass;
	private $db;

	public function dbconect($host,$root,$pass,$db)
	{
		$this->host = $host;
		$this->root = $root;
		$this->pass = $pass;
		$this->db   = $db;
		$this->conexion = new mysqli("172.16.50.142", "remoto", "remoto", "areacaribe");

		
	}

	//se cierra la conexión
	public function dbcerrar()
	{
		// mysql_close($this->conexion);
	}
//
}

$conex=new conect();
$conex->dbconect("172.16.50.142", "remoto", "remoto", "areacaribe");
?>