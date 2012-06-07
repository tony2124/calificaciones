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

	public function login($var=null){
		if(isset($var)){
			$vars['error']='error';
		}
		if(SESSION('usuario')){
			redirect(get('webURL').'/default/Perfil');
		}
		$vars['view']=$this->view('Login',true);
		$this->render('content',$vars);
	}


	public function verificar_login(){
		$usuario=POST('user');
		$clave=POST('password');

		$consulta= $this->Default_Model-> verifica_log($usuario,$clave);

		if($consulta==null){
			redirect(get('webURL').'/default/login/error');	
		}else{
			SESSION('usuario',$consulta[0]['numero_control']);
			SESSION('nombre',$consulta[0]['nombre_alumno']);
			SESSION('apellido_p',$consulta[0]['ap_alumno']);
			SESSION('apellido_m',$consulta[0]['am_alumno']);
			SESSION('fecha_nacimiento',$consulta[0]['fecha_nacimiento_alumno']);
			redirect(get('webURL').'/default/perfil');	
		}
			
	}

	public function logout(){
		unsetsessions();
		redirect(get('webURL').'/default/login');
	}


	public function perfil(){
		if(!SESSION('usuario')){
			redirect(get('webURL').'/default/login');
		}
		$vars['view']=$this->view('Profile',true);
		$this->render('content',$vars);
	}

	public function registrarAlumno(){
		$consulta = $this->Default_Model->agregaAlumno();
	}



}
