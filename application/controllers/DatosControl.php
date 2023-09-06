<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatosControl extends CI_Controller {

    public function __construct(){
        // - Permite pasar argumentos adicionales en los preestablecidos en la clase padre
        // - Carga el modelo
        // - Permite trabajar con formularios
        parent::__construct();
        $this->load->model("Datosmodelo");
        $this->load->helper(array('form', 'url'));
    }

	public function index(){
        // - Redirige a la Vista en "application/views/datos/index.php"
        $info["titulo"] = "Registra datos";
		$this->load->view('datos/index', $info);
	}

    public function registrar(){
        // - Recibe los datos del formulario por POST
        // - Manda los datos recibidos al modelo en la funcion "registro"
        // - Redirige a una vista dependiendo del retorno del modelo

        $nombre = $this->input->POST("nombre");
        $telefono = $this->input->POST("telefono");
        $email = $this->input->POST("email");

        $resultado = $this->Datosmodelo->registro($nombre, $telefono, $email);

        if($resultado){
            redirect("DatosControl/correcto");
        }else{
            $this->index();
        }
    }

    public function correcto(){
        // - Redirige a la Vista en "index.php/DatosControl/correcto"
        $info["titulo"] = "Correcto";
		$this->load->view('datos/correcto', $info);
	}
}