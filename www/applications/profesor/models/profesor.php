<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Profesor_Model extends ZP_Model {
	
	public function __construct() {
		$this->Db = $this->db();
		
		$this->helpers();

	}

	public function getAlumno($num){
		return $this->Db->query("select * from alumnos where numero_control='$num'");
	}

	public function getProfesor($usuario, $clave)
	{
		return $this->Db->query("select * from profesores where usuario_profesor='$usuario' and clave_profesor ='$clave'");
	}
	
}