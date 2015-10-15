<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of administrator
 *
 * @author VMC-D02
 */
class administrator extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('admin/administrador_model', 'ADMINISTRADOR');
    }
    
    public function index(){
        $correo     = $this->input->post('emailLogin', TRUE);
        $password   = $this->input->post('contraLogin', TRUE);
        
        $objUsuario = $this->ADMINISTRADOR->validateUsuario($correo, $password);
        
        if($objUsuario){
            if(is_array($objUsuario) && $correo == $objUsuario[0]->adm_correo && md5($password) == $objUsuario[0]->adm_clave){
                redirect('principal');
            }else{
                redirect();
            }
        }else{
            redirect('index/login');
        }
    }
}
