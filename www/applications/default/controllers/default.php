<?php
/**
 * Access from index.php:
 */


class Default_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->app("default");
		
		$this->Templates = $this->core("Templates");

		$this->Templates->theme();

		$this->Default_Model = $this->model("Default_Model");
	}
	
	public function index() {
	redirect(get('webURL').'/default/login');	
	/*	$data= $this -> Default_Model -> getAlumno('09020204');
		$comoquiera['alumno'] = $data;
		$comoquiera['view'] = $this -> view('comosea',true);
		$this->render("content", $comoquiera);*/
		
	}

	public function login(){
		$vars['view']=$this->view('Login',true);
		$this->render('content',$vars);
	}

}
