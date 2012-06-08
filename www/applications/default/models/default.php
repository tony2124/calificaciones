<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Default_Model extends ZP_Model {
	
	public function __construct() {
		$this->Db = $this->db();
		
		$this->helpers();
	
		$this->table = "contacts";
	}

	public function verifica_log($u,$c){
		return $this->Db->query("select * from alumnos where numero_control='$u' and clave='$c'");
	}

	public function agregaAlumno($nc,$p,$n,$ap,$am,$ani){
		$q = "insert into alumnos values('$nc','$p','$n','$ap','$am','$ani')";
		$this->Db->query($q);
		$data = $this->getMaterias($ani);

		foreach($data as $mat){
			$id=uniqid();
			$this->Db->query("insert into calificaciones values('$id','$nc','$mat[id_materia]',0,0,0,0,0)");
		}
		return $q;
	}

	public function getCalificaciones($num_control){
		return $this->Db->query("select * from calificaciones natural join materias where numero_control='$num_control'");
	}

	public function getMaterias($anio){
		return $this->Db->query("select * from materias where anio_materia='$anio'");
		
	}
	
}