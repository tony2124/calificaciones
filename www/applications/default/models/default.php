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

	public function agregaAlumno($nc,$p,$n,$ap,$am){
		$q = "insert into alumnos values('$nc','$p','$n','$ap','$am')";
		$this->Db->query($q);
		return $q;
	}

	
}