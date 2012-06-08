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
			if($var=="error")
				$vars['error']='error';

			if($var=="error_re")
				$vars['error_re']='error';

			if($var=="bien")
				$vars['bien']='bien';
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
			SESSION('anio',$consulta[0]['anio_alumno']);

			redirect(get('webURL').'/default/perfil');	
		}
			
	}

	public function logout(){
		unsetsessions();
		redirect(get('webURL').'/default/login');
	}


	public function perfil($var = null){
		if(!SESSION('usuario')){
			redirect(get('webURL').'/default/login');
		}
		if(isset($var)){
			$vars['periodo']=$var;
		}
		$vars['calificaciones'] = $this->Default_Model->getCalificaciones(SESSION('usuario'));
		$vars['view']=$this->view('Profile',true);
		$this->render('content',$vars);
	}

	public function registrarAlumno(){
		$N_control=POST('num_control');
		$contra=POST('password');
		$nombre=POST('nombre');
		$apellido_p=POST('apellido_p');
		$apellido_m=POST('apellido_m');
		$anio = POST('anio');

		if($N_control == "" || $contra =="" || $nombre=="" || $apellido_p=="" || $apellido_m=="" || $anio==""){
			redirect(get('webURL').'/default/login/error_re');
		}



		print $consulta = $this->Default_Model->agregaAlumno($N_control,$contra,$nombre,$apellido_p,$apellido_m,$anio);
		
		if($consulta){
			redirect(get('webURL').'/default/login/bien');
		}
		else{
			redirect(get('webURL').'/default/login/error_re');
		}
	}



}
