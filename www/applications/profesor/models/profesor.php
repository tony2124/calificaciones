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
	public function pushProfesor($vars)
	{
		return $this->Db->query("insert into profesores values('$vars[id]','$vars[usuario]','$vars[clave]','$vars[nombre]','$vars[ap]','$vars[am]')");
	}

	public function getMaterias($anio)
	{
		return $this->Db->query("select * from materias where anio_materia = '$anio'");
	}

	public function getAlumnosInscritos($mat)
	{
		return $this->Db->query("select * from calificaciones natural join materias natural join alumnos where id_materia = '$mat'");
	}
	
}