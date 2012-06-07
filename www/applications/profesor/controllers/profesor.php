<?php
/**
 * Access from index.php:
 */


class Profesor_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->app("profesor");
		
		$this->Templates = $this->core("Templates");

		$this->Templates->theme("profesor");

		$this->Profesor_Model = $this->model("Profesor_Model");
	}
	
	public function index() {
	redirect(get('webURL').'/profesor/login');	
	}

	public function login($error = NULL){
		if(SESSION('id')) redirect(get('webURL')._sh.'profesor/calificaciones');
		if($error) $vars['error'] = 'actived';
		$vars['view']=$this->view('loginForm',true);
		$this->render('content',$vars);
	}

	public function registro()
	{
		if(!SESSION('id')) redirect(get('webURL')._sh.'profesor/login');
		
		$vars['view']=$this->view('registroForm',true);
		$this->render('content',$vars);
	}

	public function iniciandosesion()
	{
		$usuario = POST('usuario');
		$clave = POST('clave');

		$data = $this->Profesor_Model->getProfesor($usuario, $clave);

		if($data == null)
		{
			redirect(get('webURL')._sh.'profesor/login/error');
		}
		else
		{
			SESSION('nombre', $data[0]['nombre_profesor']);
			SESSION('ap', $data[0]['ap_profesor']);
			SESSION('nombre', $data[0]['am_profesor']);
			SESSION('id', $data[0]['id_profesor']);
			redirect(get('webURL')._sh.'profesor/calificaciones');
		}
	}

}
