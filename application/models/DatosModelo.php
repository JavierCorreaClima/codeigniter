<?php

    class DatosModelo extends CI_Model {

        public function __construct(){
            //  - Constructor para conectar a la BD
            $this->load->database();
        }

        public function registro($nombre, $telefono, $correo_electronico){
                // - Funcion para realizar insert en la tabla datos
                // - Parametros: nombre (String), telefono (String), correo_electronico (String)
                // - Retorna true si inserta o false si no lo hace
            
            return $this->db->insert("datos", ["nombre"=>$nombre, 
                                        "telefono"=>$telefono, 
                                        "correo_electronico"=>$correo_electronico]);
        }


    }


?>