<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InicioControl extends CI_Controller {

	public function index(){
        // - Redirige a la Vista (InicioVista.php) en "application/views"
		$this->load->view('InicioVista');
	}
}
