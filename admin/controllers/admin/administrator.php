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
        $input = array();
        $input['correo'] = $correo;
        $input['password'] = $password;
        if($objUsuario){
            if(is_array($objUsuario) && $correo == $objUsuario[0]->adm_correo && md5($password) == $objUsuario[0]->adm_clave){
                $arreglo = array();
                $arreglo['user'] = $objUsuario[0]->adm_id;
                $arreglo['usuario'] = $objUsuario[0]->adm_usuario;
                $arreglo['correo'] = $objUsuario[0]->adm_correo;
                $arreglo['nombre'] = $objUsuario[0]->adm_nombre;
                $arreglo['apellido'] = $objUsuario[0]->adm_apellido;
                $arreglo['cambio_clave'] = $objUsuario[0]->adm_fecha_cambio_clave;
                $arreglo['tipo'] = $objUsuario[0]->adm_ta_id;
                $this->session->set_userdata($arreglo); 
                redirect('principal');
            }else{
                $this->session->set_userdata($input); 
                redirect('index/login/1');
            }
        }else{
            $this->session->set_userdata($input); 
            redirect('index/login/1');
        }
    }
    
    public function olvideClave(){
        $correo = $this->input->post('correoOlvContra', TRUE);
        $objUsuario = $this->ADMINISTRADOR->getAdministratorByEmail($correo);
        
        if($objUsuario && $objUsuario[0]->adm_id > 0){
            $nombre_usuario = $objUsuario[0]->adm_nombre. " " .$objUsuario[0]->adm_apellido;
            $id = $objUsuario[0]->adm_id;
            $responder = "jash_08_91@hotmail.com";
            $this->ADMINISTRADOR->generateClaveReset($id);
            $obUser = $this->ADMINISTRADOR->getAdministratorById($id);
            
            $cuerpo = "<p><b>USUARIO :</b>".$obUser[0]->adm_usuario."</p>";
            $cuerpo .= "<p><b>NOMBRES Y APELLIDOS :</b>".$obUser[0]->adm_nombre." ".$obUser[0]->adm_apellido."</p>";
            $cuerpo .= "<p><b>URL :</b>".  base_url()."index.php/admin/administrator/cambiarclave/".$obUser[0]->adm_clave_reset."</p>";
            $asunto = "Olvide Contraseña";
            
            $this->senMailNew($asunto, $correo, $cuerpo, $responder, "", $nombre_usuario);
            
            $imprimirModal['imprimir'] = 1;
            $this->session->set_userdata($imprimirModal); 
        }
        
        redirect('index/login/2');
    }
}
