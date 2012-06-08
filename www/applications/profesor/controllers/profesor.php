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
			SESSION('am', $data[0]['am_profesor']);
			SESSION('id', $data[0]['id_profesor']);
			SESSION('anio', $data[0]['anio_profesor']);
			redirect(get('webURL')._sh.'profesor/calificaciones');
		}
	}

	public function registrandoProfesor()
	{
		$vars['id'] = uniqid();
		$vars['usuario'] = POST('usuario');
		$vars['clave'] = POST('clave');
		$vars['nombre'] = POST('nombre');
		$vars['ap'] = POST('ap');
		$vars['am'] = POST('am');
		$vars['grado'] = POST('grado');
		$this->Profesor_Model->pushProfesor($vars);
		redirect(get('webURL')._sh.'profesor/login');

	}

	public function calificaciones($materia = NULL)
	{
		if(!SESSION('id')) redirect(get('webURL')._sh.'profesor/login');
		$vars['view'] = $this->view('calificaciones', true);
		
		$vars['materias'] = $this->Profesor_Model->getMaterias(SESSION('anio'));

		if($materia)
		{
			$vars['idmateria'] = $materia;
			$vars['alumnos'] = $this->Profesor_Model->getAlumnosInscritos($materia);
		}
		
		$this->render('content', $vars);
	}

	public function guardarCalificacion()
	{
		print $data = POST('al1');
		print $data[0].'<br>';
		print $data[1].'<br>';
		print $data[2].'<br>';
		print $data[3].'<br>';
		print $data[4].'<br>';
		print $data[5].'<br>';
		print $data[6].'<br>';
		print $data[7].'<br>';
		print $data[8].'<br>';
		print $data[9].'<br>';
	}

	public function logout()
	{
		unsetsessions();
		redirect(get('webURL')._sh.'profesor/login');
	}

}
