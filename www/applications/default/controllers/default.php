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
		$vars["message"] = __(_("Hello World"));
		$vars["view"]	 = $this->view("show", TRUE);
		
		$this->render("content", $vars);
	}

	

}
